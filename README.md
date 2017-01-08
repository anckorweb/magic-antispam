# Magic Antispam for Forms
Antispam for html forms that does not need captcha. Simple, fast and magical.

Magic Antispam is a Javascript library that allows you to block massive sql (SPAM) injection attacks in your web forms. By using the normal captcha in your form, you are breaking the design line and causing the user to fill an unnecessary field.

* Block spam without using Captchas.
* It does not need external libraries like jQuery, Mootools...
* Easy implementation, just a few lines of code.

- - - -

# Instructions for use #
1. Insert the library **"js/magic-antispam.js"** in the footer of your page.
2. Copy the **".magicInput"** class in your css.
3. Validate with PHP the submission of the form. If the "magicInput" field is empty, then everything is fine: **if(strip_tags($_POST['magicInput']) == "")**
4. That is all!

- - - - 

I hope it will make your life easier as you have done to me.
