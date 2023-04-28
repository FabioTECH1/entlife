<!-- Comment Form -->
{{-- <div> --}}
<div class="comment-form">
    {{-- 
        <div class="group-title">
            <h4>Leave A Comment</h4>
        </div> --}}

    <!--Comment Form-->
    <form wire:submit.prevent="submit" role="form">
        <div class="row clearfix">
            @error('username')
                <p x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show" class="text-left text-danger fs-12px mb-15">
                    {{ $message }}</p>
            @enderror
            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                <input type="text" wire:model="username" name="username" placeholder="Your Name">
            </div>
            @error('email')
                <p x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show"
                    class="text-left text-danger fs-12px mb-15">
                    {{ $message }}</p>
            @enderror
            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                <input type="email" wire:model="email" name="email" placeholder="Email">
            </div>
            @error('topic')
                <p x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show"
                    class="text-left text-danger fs-12px mb-15">
                    {{ $message }}</p>
            @enderror
            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                <input type="text" wire:model="topic" name="topic" placeholder="Topic">
            </div>
            @error('message')
                <p x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show"
                    class="text-left text-danger fs-12px mb-15">
                    {{ $message }}</p>
            @enderror
            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                <textarea wire:model="message" name="message" placeholder="Type your comment"></textarea>
            </div>
            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                <button class="theme-btn btn-style-one" type="submit"><span class="txt">Post
                        comment</span></button>
            </div>
        </div>
    </form>
    {{-- </div> --}}
</div>
