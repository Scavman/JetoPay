<form action={{route('url','#calltoaction', 'contact')}} method="POST" class="div-121" name="email_form" id="email_form">
    @csrf
    <div class="div-123">
        Please send your question or request for assistance through the form
        below.
    </div>
    <div class="div-124">
        <div class="div-125">
            <div class="column-35">
                <div class="div-126">
                    <div class="div-127">Company Details</div>
                    <input type="text" class="div-128" id="company_name_input" name="company_name_input"
                           placeholder="Company Name" >
                    <select name="country_of_incorporation" id="country_of_incorporation" class="div-129" >
                        <option value="" disabled selected>Country of Incorporation</option>
                        @include('mail.country_list')
                    </select>
                    <input type="text" id="company_website_input" name="company_website_input" class="div-132"
                           placeholder="Company Website" >
                    <input type="number" id="monthly_card_input" name="monthly_card_input" class="div-133"
                           placeholder="Monthly Card Processing Volume" >
                    <select name="industry_input" id="industry_input" class="div-135" >
                        <option value="" disabled selected>Industry</option>
                        @php
                            foreach (config('app.industry') as $option)   {
                            echo "<option value=$option>$option</option>";}
                        @endphp
                    </select>
                </div>
            </div>
            <div class="column-36">
                <div class="div-138">
                    <div class="div-139">Personal Details</div>
                    <input type="text" name="name_input" id="name_input" class="div-140" placeholder="Name">
                    <input type="text" name="surname_input" id="surname_input" class="div-141" placeholder="Surname">
                    <input type="text" name="position_input" id="position_input" class="div-142" placeholder="Position">
                    <input type="text" name="email_input" id="email_input" class="div-143" placeholder="E-mail address">
                    @error('email_input')
                        <span class="text-danger"> {{$message}} </span>
                    @enderror
                    <input type="tel" name="phone_number_input" id="phone_number_input" class="div-145"
                           placeholder="(Country Code) Phone Number">
                    <textarea type="text" name="content_input" id="content_input" class="div-146" placeholder="How can we help you?"></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="div-147">
        <input type="checkbox" name="privacy_checkbox" id="privacy_checkbox">
        <label for="privacy_checkbox">I confirm that I have read and accept <a href="/privacy">Privacy Policy</a></label>
    </div>
    <input type="submit" value="Submit" class="div-150">
</form>
