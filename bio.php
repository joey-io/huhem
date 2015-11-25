<?php include 'header.php'; ?>
<div id="bio">
	<div class="container bio-1">
		<div class="third">
			<h1>
				<span class="sm">Mitchell B. Huhem, CEO<br/>and Founder of Huhem Investments</span>
				Investment Expert...
			</h1>
			<p>Mr. Mitch Huhem is an accomplished and awardwinning investor with more than 22 years experience.He has a successful track record building and operatingprofitable businesses in diverse industries and generatingsignificant returns in alternative investments. As an adept “hands on” owner/operator, Mr. Huhem has personally invested in commercial real estate including storage facilities, multi-unit apartments, commercial buildings, billboards, single-family homes, and raw land. In addition,he has captured opportunities in fast growing companies,precious metals, and other astutely timed investmentsthat offer short-term and long-term potential for significant returns.</p>
			<p class="sig"><img src="img/sig.png"></p>
		</div>
		<div class="clear"></div>
	</div>
	<div class="container bio-2">
		<h1>Education Investors</h1>
		<div class="twocol">
			<p>One of Mr. Huhem’s greatest joys is helping people grow theirinvestments. He is a founder and former lecturer at the Marriott School of Business, philanthropist and an award winning entrepreneur.As a businessman, he helped build one of the largest financialseminar companies in America with annual peak revenue of morethan $200 million dollars a year. In this role Mr. Huhem broughtthe fundamentals of sound investing to the world stage andpersonally worked with some of the most influential and respected dignitaries including U.S. Presidents George W. Bush and Gerald Ford, Prime Minister Margaret Thatcher, Prime Minister BenjaminNetanyahu, Former Soviet Statesmen Mikhail Gorbachev, General Collin Powell, former National Security Advisor and Secretary of State Henry Kissinger, First Lady Barbara Bush, Actress Mary Tyler Moore, Movie Star Chuck Norris, Two-Time world heavy weight boxing champion and Olympic gold medalist George Foreman, and billionaire Donald Trump.</p>
		</div>
		<div class="photo-slider">
			<ul>
				<?php for ($i=0; $i < 5; $i++) { ?>
					<li>
						<img src="img/photo_frame.jpg">
						<div class="attr">- <strong><?php echo $i; ?>Donald Trump</strong>,<br/><small>U.S. Presidential Candidate, Billionaire</small></div>
					</li> 
				<?php } ?>
			</ul>
		</div>

		<div class="acc table">
			<div class="td">
				<p class="q">"When Mitch enters the room it lights up."<br/>- <strong>Donald Trump</strong>,<br/><small>U.S. Presidential Candidate, Billionaire</small></p>
			</div>
			<div class="td plaque">
				<span>- <strong>Donald Trump</strong>,<br/><small>U.S. Presidential Candidate, Billionaire</small></span>
			</div>
			<div class="td">
				<p class="q">"When Mitch enters the room it lights up."<br/>- <strong>Donald Trump</strong>,<br/><small>U.S. Presidential Candidate, Billionaire</small></p>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>