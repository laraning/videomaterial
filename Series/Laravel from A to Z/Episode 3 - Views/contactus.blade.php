<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Contact Form</title>
    </head>
    <body style="padding-top: 60px">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    Contact us!
                </div>
                <div class="card-block">
                    <form role="form">
                        <div class="form-group col-lg-4">
                            <label class="form-control-label" for="form-group-input">Name</label>
                            <input type="text" class="form-control" id="form-group-input" name="name">
                        </div>
                        <div class="form-group col-lg-4">
                            <label class="form-control-label" for="form-group-input">Email</label>
                            <input type="text" class="form-control" id="form-group-input" name="email">
                        </div>
                        <div class="form-group col-lg-4">
                            <label class="form-control-label" for="form-group-input">Reason</label>
                            <select size="0" class="form-control" name="reason">
                                <option>Sales</option>
                                <option>Tech Support</option>
                                <option>General Feedback</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-12">
                            <label class="form-control-label" for="form-group-input">Notes</label>
                            <textarea class="form-control" id="form-group-input" name="notes" rows="6"></textarea>
                        </div>
                        <div class="form-group col-lg-12">
                            <button type="submit" class="btn btn-primary">Send Information</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>