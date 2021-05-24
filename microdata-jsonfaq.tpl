    {assign var="faqs" value= Tools::getFaqsDetails(Shop::getContextShopID() , Context::getContext()->language->id)} 
   <script type="application/ld+json">
    {
        "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
	    {foreach from=$faqs key=k  item=faq name=faq}
                    
			{
			"@type": "Question",
			"name": "{$faq.question nofilter}",
			"acceptedAnswer": {
			  "@type": "Answer",
			  "text": "{$faq.answer nofilter}"
			}
			}{if !$smarty.foreach.faq.last},{else} {/if}
			
		{/foreach}
		]
			
    }
    </script>
	


     