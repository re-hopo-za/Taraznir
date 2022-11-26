<div class="row-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="themesflat-contact-form style-2 w100 clearfix">
                    <div class="errors-con">
                        @error('firstName') <p>{{ $message }}</p> @enderror
                        @error('email') <p>{{ $message }}</p> @enderror
                        @error('mobile') <p>{{ $message }}</p> @enderror
                        @error('project') <p>{{ $message }}</p> @enderror
                        @error('text') <p >{{ $message }}</p> @enderror
                    </div>
                    <form wire:submit.prevent="save"   class="contact-form wpcf7-form">
                        <span class="wpcf7-form-control-wrap your-name">
                            <input wire:model.defer="firstName" type="text" tabindex="1" id="name" name="name" value=""
                                   class="wpcf7-form-control text-right" placeholder="نام*" required>
                        </span>
                        <span class="wpcf7-form-control-wrap your-email">
                            <input wire:model.defer="email" type="email" tabindex="3" id="email" name="email"
                                   value="" class="wpcf7-form-control text-right"
                                   placeholder="Your پست الکترونیک*" required>
                        </span>
                        <span class="wpcf7-form-control-wrap your-phone">
                            <input wire:model.defer="mobile" type="text" tabindex="2" id="phone" name="phone" value=""
                                   class="wpcf7-form-control text-right" placeholder="تلفن">
                        </span>
                        <span class="wpcf7-form-control-wrap your-message">
                           <textarea wire:model.defer="text" name="textarea" tabindex="5" cols="40" rows="10"
                                     class="wpcf7-form-control wpcf7-textarea text-right"
                                     placeholder="پیام*" required></textarea>
                        </span>
                        <span class="wrap-submit">
                            <input type="submit" value="برای ما ارسال"
                                   class="submit wpcf7-form-control wpcf7-submit text-right"
                                   id="submit" name="submit">
                        </span>
                    </form>
                </div>
            </div>
            <div class="col-md-8">
                <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1620.1199112291151!2d51.40134959326518!3d35.695715575952015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8e010853e06c4d%3A0xde5b53a6a003bdf4!2sSolaris%20Clothing!5e0!3m2!1sen!2s!4v1669453300593!5m2!1sen!2s" width="1100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="themesflat-spacer clearfix" data-desktop="81" data-mobile="60" data-smobile="60"></div>
            </div>
        </div>
    </div>
</div>
