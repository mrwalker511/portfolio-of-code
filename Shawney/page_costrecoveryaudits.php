<?php 
 
 /*Template Name: Cost Recovery Audits */ 
 
 ?>

<?php get_header();?>


<script type="text/javascript">
$(document).ready(function() {
    $("#content div").hide(); // Initially hide all content
    $("#tabs li:first").attr("id","current"); // Activate first tab
    $("#content div:first").fadeIn(); // Show first tab content
    
    $('#tabs a').click(function(e) {
        e.preventDefault();
        if ($(this).closest("li").attr("id") == "current"){ 
		//detection for current tab
         return       
        }
        else{             
        $("#content div").hide(); //Hide all content
        $("#tabs li").attr("id",""); //Reset id's
        $(this).parent().attr("id","current"); // Activate this
        $('#' + $(this).attr('name')).fadeIn(); // Show content for current tab
        }
    });
});
</script>


<div class="bk31">
	
<div style="float:right; position:relative;margin-right-40px; padding-left:18px;"><?php if (function_exists('vslider')) { vslider('2'); }?></div>




		<ul id="tabs">
    			<li><a href="#" name="tab1">Home</a></li>
    			<li><a href="#" name="tab2">About</a></li>
    			<li><a href="#" name="tab3">Services</a></li>
    			<li><a href="#" name="tab4">Audit Coverage</a></li>    
		</ul>
		
			<div id="content"> 
	
			    	<div id="tab1">
			    	
			    		<!--- BEGIN BOX --->

					<table class="boxmain" class="zt1">
						<tr><td class="top"><img src="/test/wp-content/uploads/2013/04/boxmaintop.png" alt=""/></td></tr>
						<tr><td class="main">
<!--Begin Text-->
<h1>Circuit Audits * Voice Audits * Data Audits * Cellular Audits * Guaranteed Risk Free Audits with 90% success rates on cost reductions 80% success rate on cost recovery!</h1>
<p><h2>What we do - Simple, Easy, Worry-Free</h2>
<p>Have you ever wondered&hellip;&rdquo;what are all these fees that go into my telecom bill and why don&rsquo;t they make sense?&rdquo;&nbsp; or &ldquo;did we agree to these rates, fees and charges when we signed our contract?&rdquo; or &ldquo;are we being overcharged and if so, how do we proved it?&rdquo;&nbsp; Most Executives believe they are being charged fairly and that their carrier would bill them in good faith in accordance with their contract.&nbsp; However, in 90% of the customers we see, we find inaccurate billing, inaccurate charges, unexplained rate hikes all contributing to a negative impact on working capital.</p>
<!---
<h2>How we do it.</h2>
<p>For about 90% of our clients, we are able to identify and implement strategies to reduce their operating costs almost immediately.&nbsp; Our team brings a vast amount of experience, knowledge and understanding which is the foundation of our tried and true audit methodology; a process which has proven successful since 2004.&nbsp;</p>
--->
<h2>Our Commitment to you</h2>
<p>Most folks initially feel as though they have their costs under control and they are skeptical about our claim that we can help.&nbsp; You can rest assured, we&rsquo;ve heard many upfront concerns &ndash; they were all communicated by our referenceable customers before they agreed to work with us.&nbsp; Be relaxed in knowing that if you consider working with us on a Cost Recovery Audit &ndash; you have our 100% guaranteed commitment that if we cannot save you money, our services will not cost you a penny.<br /><br />Our Agenda:&nbsp; Shawney is 100% committed to advocating your interests.&nbsp; We are an extension of your team and we are onboard with your goals which usually include wanting to be treated fairly and ethically, reducing costs and recovering costs in a highly pragmatic, professional approach.</p>
<h2>What is a Cost Recovery Audit?</h2>
<p>Honestly think through your understanding of your telephone costs.&nbsp; Do you have an accurate idea of what it costs for a single workers local or long distance calls in a month&hellip;a day&hellip;an hour&hellip;per call?&nbsp; Your contract may read one way but the detailed costs, fees and charges tell a much different story.&nbsp; Is anyone solely responsible for combing through the detailed billing on a monthly basis?&nbsp; Is anyone really watching?<br /><br />Honestly, most Executives don&rsquo;t know for certain.&nbsp; Frankly most companies understand that controlling voice and data expenses is difficult to do and most assume that someone on staff is either monitoring them closely or that their circuit provider is billing them honestly and accurately every month.&nbsp; If your voice and data expenses are significant, you need to explore a Cost Recovery Audit with Shawney.&nbsp; Our expert team of auditors bring a tremendous amount of telecom and data experience, not only with audits but also with actual backgrounds working for the very circuit providers you are being billed by.&nbsp; We are your advocate, advisor, negociation partner &ndash; laser focused on reducing and managing your costs but also recovering dollars spent unnecessarily.&nbsp; Don&rsquo;t let your providers have the upper hand in negociations; we&rsquo;ll pull together all the facts, analyze those facts and then build a strategic plan and work as your partner to ensure that you are in fact being billed &ndash; fairly and honestly.<br /><br />Our staff of auditors are highly knowledgeable and seasoned in dealing with your providers and also with large and medium clients to audit and reduce voice and data spend.&nbsp; Our customers are referenceable and our methodology is tried and true.&nbsp; Minimize your spend and maximize your cash recovery with Shawney.<br />Is this level of savings really worth our time?<br /><br />We regularly save our customers $100&rsquo;s of thousands of dollars per year and millions over the course of multi-year contracts.<br /><br /><strong>Our Agenda:&nbsp; Shawney is 100% committed to advocating your interests.&nbsp; We are an extension of your team and we are onboard with your goals which usually include wanting to be treated fairly and ethically, reducing costs and recovering costs in a highly pragmatic, professional approach.</strong><br /><br /></p>
</p>
<!--End Text-->

</td></tr>
<tr><td class="bot"><img src="/test/wp-content/uploads/2013/04/boxmainbot.png" alt=""/></td></tr>
</table>
<!--- END BOX --->

</div>
<!--Begin About-->
<div id="tab2">

<table class="boxmain">
<tr><td class="top"><img src="/test/wp-content/uploads/2013/04/boxmaintop.png" alt=""/></td></tr>
<tr><td class="main">

<h1>About Circuit Audit Professionals</h1>
<p><p><strong>With CIRCUIT AUDIT PROFESSIONALS</strong> -&nbsp; you can rest assured that we are committed to lowering your one-time and recurring voice, data, wireless, internet and equipment costs.&nbsp; Our consultants come from the very carriers you do business with today !&nbsp; Our veteran lead auditors have a vast amount of experience installing voice, data, internet circuits, troubleshooting those circuits and audit of those circuit related billing questions for your carriers.&nbsp; Who better qualified to represent your organization when it comes to auditing your organization to ensure that you are being accurately billed and enjoying the very best value for your dollar when dealing with your carriers?&nbsp; One manufacturing company recently enjoyed a $650,000 refund due to turn-over in staff and circuits that had been cancelled but continued to bill for an extended period of time.&nbsp; An Auto Dealership recently recouped $240,000 in incorrect billing credits and a reduction in monthly recurring overhead costs of $15,000 !&nbsp; Whether you think you&rsquo;re being misbilled or if you suspect that your monthly costs are too high, let <strong>CIRCUIT AUDIT PROFESSIONALS</strong> take a closer look.&nbsp; <strong>Our Audit services are FREE</strong> (contingent upon recovery or reduction)&hellip;&nbsp; Call today !</p>
<p>Shawney Consulting is a specialized group of of financial auditors focused on voice and data projects; working to reduce your overhead costs and acting as your trusted advisor and advocate for dealing with telecomm providers.&nbsp; We deliver granular voice and data cost audits, negotiation services, contract audits &ndash; and the beauty of it is that we pay for ourselves.&nbsp; <strong>Shawney Cost Recovery Audits</strong> are strictly contingency fee based &ndash; meaning that if we can&rsquo;t reduce your costs, our services are completely free of charge &ndash; we&rsquo;re that confident !&nbsp; You can focus on driving revenue in your core business and we&rsquo;ll focus on recovering revenue on your behalf.</p>
<h2>Customer Time Commitment:</h2>
<p>Lets face it, your time is valuable !&nbsp; Human capital is being spread as thin as can be and our aim is to not disturb your business in any way.&nbsp; We will ask you to provide last month&rsquo;s voice/data bill for each location and some background in the intial 30 minute kick-off meeting.&nbsp; <strong>Fax, copy or email these bills</strong>&hellip;whatever is easiest for you.</p>
<p>&nbsp;</p></p>


</td></tr>
<tr><td class="bot"><img src="/test/wp-content/uploads/2013/04/boxmainbot.png" alt=""/></td></tr>
</table>
</div>
<!--End About-->
 

<!--Begin Services-->
<div id="tab3">
<table class="boxmain">
<tr><td class="top"><img src="/test/wp-content/uploads/2013/04/boxmaintop.png" alt=""/></td></tr>
<tr><td class="main">

<h1>Services</h1>
<p><p><strong>The truth is: circuit providers and telecom carriers don&rsquo;t care if you over-pay for their services.</strong>&nbsp; In fact, their Account Managers and Sales Managers are paid commission and bonus on incremental cost increases year over year.&nbsp; So who is looking out for you?&nbsp; Telecom carrier billing invoices are complex and confusing.&nbsp; When you consider the need for additional products based on growth and internal employee turnover, managing these costs becomes a very real challenge.&nbsp; Hidden charges, double taxes, service charges, charges for dormant lines, expired contracts with billing excellorators are just a few of the painpoints for many companies.&nbsp; Let <strong>CIRCUIT AUDIT PROFESSIONALS</strong> help you navigate through these drivers of waste and overhead dollars.</p>
<h2>Cost Recovery Audit</h2>
<p>At <strong>CIRCUIT AUDIT PROFESSIONALS</strong>, we are your advocate and partner.&nbsp; Unlike vendors wanting to sell you new software or phone systems, we have your best interests at heart.&nbsp; Nobody wants to overpay for telecom or internet services.&nbsp; We are ready to work with you helping validate and ensuring billing accuracy and acting as your advocate to negotiate fair market pricing.&nbsp; Billing errors, mystery line items, expired contracts that bill you double, triple or even five times what they should&hellip;will all become a thing of the past.&nbsp;&nbsp; Our audits are fast, painless and completely non-intrusive</p>
<h2>Circuit Audit</h2>
<p>Whether you have a handful of domestic locations, a small campus or locations across the globe; <strong>CIRCUIT AUDIT PROFESSIONALS</strong> can help you gain control of your circuit costs.&nbsp; A recent audit of a Software Development Company produced 34 unused, PRI&rsquo;s at a single location resulting in tremendous cost savings for this customer.&nbsp; Staff turnover, multiple contracts with multiple carriers and support plans create difficult scenarios when it comes to managing costs across many organizations.&nbsp; In today&rsquo;s marketplace, everyone is working hard to do more with fewer staff consequently, it becomes virtually impossible for any single individual to be responsible for tracking every dollar at every location and audit all invoices across wired, wireless, internet and circuits.&nbsp; This is where <strong>CIRCUIT AUDIT PROFESSIONAL'S </strong>expertise comes into play.&nbsp; <strong>CIRCUIT AUDIT PROFESSIONALS</strong> is a CFO&rsquo;s best friend; identifying, reducing and recovering costs across multiple locations and multiple cost centers.&nbsp; <strong>Call CIRCUIT AUDIT PROFESSIONALS today!</strong><br /><br /></p>
<h2>Contact</h2>
<p><span style="font-size: medium;"><strong>1.888.574.9980</strong></span></p>
<h2>When Telecom and Data Costs Go Bad:</h2>
<p>Surprisingly some of the best run US based organizations do not have control over their telecom expenses.&nbsp; Other strategic business initiatives and consolidation take priority and drives telecom expense management down on the list of projects.&nbsp; Ultimately lack of staff, time and budget result cost over-runs across telecom and internet. Resulting in:<br /><br />&bull;&nbsp;&nbsp; &nbsp;Limited staff to audit invoices and agreements<br />&bull;&nbsp;&nbsp; &nbsp;Lack of internal process from invoicing to payment<br />&bull;&nbsp;&nbsp; &nbsp;Decentralized Invoice and Vendor Management<br />&bull;&nbsp;&nbsp; &nbsp;Unchallenged and unchanged cost increases<br />&bull;&nbsp;&nbsp; &nbsp;Lack of Inventory Management<br />&bull;&nbsp;&nbsp; &nbsp;Decentralized provisioning management<br /><br />Knowing what you have, why you have it and how to use it is critical to managing your costs.&nbsp; If your objective is to get costs under control, <strong>CIRCUIT AUDIT PROFESSIONALS</strong>&nbsp; can help. &nbsp;<br /><br /></p></p>


</td></tr>
<tr><td class="bot"><img src="/test/wp-content/uploads/2013/04/boxmainbot.png" alt=""/></td></tr>
</table>

</div>
<!--End Services-->  
    				
    
<!--Begin Audit Coverage-->
<div id="tab4">

<!--- BEGIN BOX --->
<table class="boxmain">
<tr><td class="top"><img src="/test/wp-content/uploads/2013/04/boxmaintop.png" alt=""/></td></tr>
<tr><td class="main">

<h1>Circuit Audits Nationwide</h1>
<p>We Provide Telecom Circuit Audits in the Following States</p>
<p>Check out our locations:<br /> <a class="clink" href="/alaska/">Alaska</a><br />
<a class="clink" href="/alabama/">Alabama</a><br />
<a class="clink" href="/arkansas/">Arkansas</a><br />
<a class="clink" href="/arizona/">Arizona</a><br />
<a class="clink" href="/california/">California</a><br />
<a class="clink" href="/colorado/">Colorado</a><br />
<a class="clink" href="/connecticut/">Connecticut</a><br />
<a class="clink" href="/washington-dc/">Washington DC</a><br />
<a class="clink" href="/delaware/">Delaware</a><br />
<a class="clink" href="/florida/">Florida</a><br />
<a class="clink" href="/georgia/">Georgia</a><br />
<a class="clink" href="/hawaii/">Hawaii</a><br />
<a class="clink" href="/iowa/">Iowa</a><br />
<a class="clink" href="/idaho/">Idaho</a><br />
<a class="clink" href="/illinois/">Illinois</a><br />
<a class="clink" href="/indiana/">Indiana</a><br />
<a class="clink" href="/kansas/">Kansas</a><br />
<a class="clink" href="/kentucky/">Kentucky</a><br />
<a class="clink" href="/louisiana/">Louisiana</a><br />
<a class="clink" href="/massachusetts/">Massachusetts</a><br />
<a class="clink" href="/maryland/">Maryland</a><br />
<a class="clink" href="/maine/">Maine</a><br />
<a class="clink" href="/michigan/">Michigan</a><br />
<a class="clink" href="/minnesota/">Minnesota</a><br />
<a class="clink" href="/missouri/">Missouri</a><br />
<a class="clink" href="/mississippi/">Mississippi</a><br />
<a class="clink" href="/montana/">Montana</a><br />
<a class="clink" href="/north-carolina/">North Carolina</a><br />
<a class="clink" href="/north-dakota/">North Dakota</a><br />
<a class="clink" href="/nebraska/">Nebraska</a><br />
<a class="clink" href="/new-hampshire/">New Hampshire</a><br />
<a class="clink" href="/new-jersey/">New Jersey</a><br />
<a class="clink" href="/new-mexico/">New Mexico</a><br />
<a class="clink" href="/nevada/">Nevada</a><br />
<a class="clink" href="/new-york/">New York</a><br />
<a class="clink" href="/ohio/">Ohio</a><br />
<a class="clink" href="/oklahoma/">Oklahoma</a><br />
<a class="clink" href="/oregon/">Oregon</a><br />
<a class="clink" href="/pennsylvania/">Pennsylvania</a><br />
<a class="clink" href="/rhode-island/">Rhode Island</a><br />
<a class="clink" href="/south-carolina/">South Carolina</a><br />
<a class="clink" href="/south-dakota/">South Dakota</a><br />
<a class="clink" href="/tennessee/">Tennessee</a><br />
<a class="clink" href="/texas/">Texas</a><br />
<a class="clink" href="/utah/">Utah</a><br />
<a class="clink" href="/virginia/">Virginia</a><br />
<a class="clink" href="/vermont/">Vermont</a><br />
<a class="clink" href="/washington/">Washington</a><br />
<a class="clink" href="/wisconsin/">Wisconsin</a><br />
<a class="clink" href="/west-virginia/">West Virginia</a><br />
<a class="clink" href="/wyoming/">Wyoming</a><br />
</p>


</td></tr>
<tr><td class="bot"><img src="/test/wp-content/uploads/2013/04/boxmainbot.png" alt=""/></td></tr>
</table></div>
<div style="clear:both; height:5px;"></div>



<!--End Circuit Coverage-->
    

<?php get_footer(); ?>