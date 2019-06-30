<?php include 'header.php' ?>
<section class="section-practice">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="welcome.php" method="post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="website">Website</label>
                        <input type="text" id="website" name="website" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="message">Comment</label>
                        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                    </div>

                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                    <label class="form-check-label" for="female"> Female </label>
                                </div>
                                <div class="form-check ">
                                <input class="form-check-input" type="radio" name="gender" id="other" value="other" >
                                <label class="form-check-label" for="other">Other</label>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <button class="btn btn-primary" type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php' ?>

    