<?php
  $className = 'c-block';
  if (!empty($block['className'])) {
      $className .= ' ' . $block['className'];
  }

  if (!empty($block['align'])) {
      $className .= ' align' . $block['align'];
  }
?>

<!-- MARKETO FORMS BEGIN -->
<!-- General form script -->
<script src="//go.as-software.com/js/forms2/js/forms2.min.js"></script> 

<!-- Job form -->
<div class="form-container">
  
  <form id="mktoForm_1053"><h2>Apply for this position</h2></form>
</div>
<script>MktoForms2.loadForm("//go.as-software.com", "074-NJA-430", 1053);</script>

<!-- Hero / demo form -->
<div class="form-container">
  
  <form id="mktoForm_1060"><h2>Request a demo</h2>
    <script src="//go.as-software.com/js/forms2/js/forms2.min.js"></script> <form id="mktoForm_1065"></form> <script>MktoForms2.loadForm("//go.as-software.com", "074-NJA-430", 1065);</script>
  </form>
</div>
<script>MktoForms2.loadForm("//go.as-software.com", "074-NJA-430", 1060);</script>
<!-- MARKETO FORMS END -->

<!-- SCRIPT TO STRIP MARKETO STOCK STYLING -->
<script>
function destyleMktoForm(mktoForm, moreStyles){
	var formEl = mktoForm.getFormElem()[0],
		arrayify = getSelection.call.bind([].slice);

	// remove element styles from <form> and children
	var styledEls = arrayify(formEl.querySelectorAll("[style]")).concat(formEl);	
	styledEls.forEach(function(el) {
		el.removeAttribute("style");
	});

	// disable remote stylesheets and local <style>s
	var styleSheets = arrayify(document.styleSheets);	
	styleSheets.forEach(function(ss) {
		if ( [mktoForms2BaseStyle,mktoForms2ThemeStyle].indexOf(ss.ownerNode) != -1 || formEl.contains(ss.ownerNode) ) {
			ss.disabled = true;
		}
	});
         
   if(!moreStyles) {
      formEl.setAttribute("data-styles-ready", "true");
      console.log("Styles ready at: " + performance.now())
   }
};

MktoForms2.whenRendered(function(form) {
  destyleMktoForm(form);
});
</script>
