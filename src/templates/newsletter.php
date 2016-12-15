<div class="newsletter-block">
    <div class="newsletter-container">
        <input class="close-newsletter" type="button" value="x" onclick="closeNewsletter()">
        <p>register for our newsletter</p>
        <form method="post" onsubmit="return newsletter_check(this)" action="<?php echo bloginfo('home');?>/?na=s">
            <label class="pitch">email</label>
            <input class="pitch email-icon-white" required="" name="ne" value="Email Address..." onclick="if (this.defaultValue==this.value) this.value=''" onblur="if (this.value=='') this.value=this.defaultValue" type="email">
            <label class="pitch">name</label>
            <input class="pitch name-icon-white" name="nn" value="Name" onclick="if (this.defaultValue==this.value) this.value=''" onblur="if (this.value=='') this.value=this.defaultValue" type="name">
            <button class="btn register-btn" type="submit">submit</button>
        </form>
    </div>
</div>