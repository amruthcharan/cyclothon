<form method="POST" action="/cyclothon">
    @csrf
    <h3>Register Now</h3>
    <div class="row">
        <div class="offset-md-2 offset-sm-0 col-md-8 col-sm-12">
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name *" value="" required />
            </div>
            <div class="form-group">
                <select required type="text" name="class" class="form-control" required>
                    <option value>== Select Class ==</option>
                    <option value="1st class">1st class</option>
                    <option value="2nd class">2nd class</option>
                    <option value="3rd class">3rd class</option>
                    <option value="4th class">4th class</option>
                    <option value="5th class">5th class</option>
                    <option value="6th class">6th class</option>
                    <option value="7th class">7th class</option>
                    <option value="8th class">8th class</option>
                    <option value="9th class">9th class</option>
                    <option value="10th class">10th class</option>
                    <option value="11th class">11th class</option>
                    <option value="12th class">12th class</option>
                </select>
            </div>
            <div class="form-group">
                <select required type="text" name="category" class="form-control">
                    <option value>== Select Category ==</option>
                    <option>5 KM (6th and below)</option>
                    <option>10 KM (7th and above)</option>
                </select>
            </div>
            <div class="text-center">
                <input value="need cycle" id="rent" type="radio" name="cycle_type" checked>
                <label class="radio-inline" for="rent">
                    I need cycle for rent
                </label>
                <br class="d-md-block d-none">
                <input value="own cycle" id="own" type="radio" name="cycle_type">
                <label class="radio-inline" for="own">
                    I will bring my cycle
                </label>
            </div>
            <input type="hidden" value="450" name="price">
            <h4 class="text-center pb-3">Amount to be paid: Rs.<span id="price">450</span>/-</h4>
            <div class="form-group">
                <input type="submit" name="btnSubmit" class="btnContact btn-block" value="Register Now" />
            </div>
        </div>
    </div>
</form>
