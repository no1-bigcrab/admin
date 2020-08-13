<div class="col-md-7 mb-5">

    <form action="#" class="p-5 bg-white">


        <div class="row form-group">
            <div class="col-md-6 mb-3 mb-md-0">
                <label class="text-black" for="fname">First Name</label>
                <input type="text" id="fname" class="form-control" placeholder="First Name">
            </div>
            <div class="col-md-6">
                <label class="text-black" for="lname">Last Name</label>
                <input type="text" id="lname" class="form-control" placeholder="Last Name">
            </div>
        </div>

        <div class="row form-group">
            <div class="col-md-6 mb-3 mb-md-0">
                <label class="text-black" for="date">Date of Travel</label>
                <input type="text" id="date" class="form-control datepicker px-2" placeholder="Date of visit">
            </div>
            <div class="col-md-6">
                <label class="text-black" for="email">Email</label>
                <input type="email" id="email" class="form-control" placeholder="Email">
            </div>
        </div>

        <div class="row form-group">
            <div class="col-md-12">
                <label class="text-black" for="treatment">How Many Person</label>
                <select name="treatment" id="treatment" class="form-control">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                    <option value="">5+</option>
                </select>
            </div>
        </div>

        <div class="row form-group">
            <div class="col-md-12">
                <label class="text-black" for="treatment">Destination</label>
                <select name="treatment" id="treatment" class="form-control">
                    <option value="">Japan</option>
                    <option value="">Europe</option>
                    <option value="">China</option>
                    <option value="">France</option>
                    <option value="">Philippines</option>
                </select>
            </div>
        </div>

        <div class="row form-group">
            <div class="col-md-12">
                <label class="text-black" for="note">Notes</label>
                <textarea name="note" id="note" cols="30" rows="5" class="form-control"
                    placeholder="Write your notes or questions here..."></textarea>
            </div>
        </div>

        <div class="row form-group">
            <div class="col-md-12">
                <input type="submit" value="Send" class="btn btn-primary py-2 px-4 text-white">
            </div>
        </div>


    </form>
</div>