/* Game Js */


var width = 320,
//width of the canvas
height = 500,
//height of the canvas
gLoop;

  c = document.getElementById('c'), 
//canvas itself 

  ctx = c.getContext('2d');
//and two-dimensional graphic context of the
//canvas, the only one supported by all 
//browsers for now

c.width = width;
c.height = height;
//setting canvas size 

var clear = function(){
  ctx.fillStyle = '#d0e7f9';
//set active color to #d0e... (nice blue)
//UPDATE - as 'Ped7g' noticed - using clearRect() in here is useless, we cover whole surface of the canvas with blue rectangle two lines below. I just forget to remove that line
//ctx.clearRect(0, 0, width, height);
//clear whole surface
  ctx.beginPath();
//start drawing
  ctx.rect(0, 0, width, height);
//draw rectangle from point (0, 0) to
//(width, height) covering whole canvas
  ctx.closePath();
//end drawing
  ctx.fill();
//fill rectangle with active
//color selected before
}

var howManyCircles = 10, circles = [];

for (var i = 0; i < howManyCircles; i++) 
  circles.push([Math.random() * width, Math.random() * height, Math.random() * 100, Math.random() / 2]);
//add information about circles into
//the 'circles' Array. It is x & y positions, 
//radius from 0-100 and transparency 
//from 0-0.5 (0 is invisible, 1 no transparency)

var DrawCircles = function(){
  for (var i = 0; i < howManyCircles; i++) {
    ctx.fillStyle = 'rgba(255, 255, 255, ' + circles[i][3] + ')';
//white color with transparency in rgba
    ctx.beginPath();
    ctx.arc(circles[i][0], circles[i][1], circles[i][2], 0, Math.PI * 2, true);
//arc(x, y, radius, startAngle, endAngle, anticlockwise)
//circle has always PI*2 end angle
    ctx.closePath();
    ctx.fill();
  }
};

var MoveCircles = function(deltaY){
  for (var i = 0; i < howManyCircles; i++) {
    if (circles[i][1] - circles[i][2] > height) {
//the circle is under the screen so we change
//informations about it 
      circles[i][0] = Math.random() * width;
      circles[i][2] = Math.random() * 100;
      circles[i][1] = 0 - circles[i][2];
      circles[i][3] = Math.random() / 2;
    } else {
//move circle deltaY pixels down
      circles[i][1] += deltaY;
    }
  }
};

GameLoop();



//we immediately execute the function above and 
//assign its result to the 'player' variable
//as a new object 


//our character is ready, let's move it 
//to the center of the screen,
//'~~' returns nearest lower integer from
//given float, equivalent of Math.floor()

var GameLoop = function(){
    clear();
    MoveCircles(5);
    DrawCircles();
    player.draw();
    gLoop = setTimeout(GameLoop, 1000 / 50);
}


var player = new (function(){
//create new object based on function and assign 
//what it returns to the 'player' variable

    var that = this;
//'that' will be the context now

//attributes
    that.image = new Image();
    that.image.src = "img/angel.png";
//create new Image and set it's source to the 
//'angel.png' image I upload above

    that.width = 65;
//width of the single frame
    that.height = 95;
//height of the single frame

    that.X = 0;
    that.Y = 0;
//X&Y position

//methods 
    that.setPosition = function(x, y){
    that.X = x;
    that.Y = y;
}

   that.frames = 1;
//number of frames indexed from zero
    that.actualFrame = 0;
//start from which frame
    that.interval = 0;
//we don't need to switch animation frame
//on each game loop, interval will helps
//with this.

    that.draw = function(){
        try {
            ctx.drawImage(that.image, 0, that.height * that.actualFrame, that.width, that.height, that.X, that.Y, that.width, that.height);
//3rd agument needs to be multiplied by number of frames, so on each loop different frame will be cut from the source image
        } catch (e) {};

        if (that.interval == 4 ) {
            if (that.actualFrame == that.frames) {
                that.actualFrame = 0;
            } else {
                that.actualFrame++;
            }
            that.interval = 0;
        }
    that.interval++;
//all that logic above just
//switch frames every 4 loops  
    }
})();
player.setPosition(~~((width-player.width)/2),  ~~((height - player.height)/2));
//our character is ready, let's move it 
//to the center of the screen,
//'~~' returns nearest lower integer from
//given float, equivalent of Math.floor()