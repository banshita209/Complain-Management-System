<?php require_once 'header.php'; ?>
            <div class="tm-row">
                <div class="tm-col-left"></div>
                <main class="tm-col-right tm-contact-main"> <!-- Content -->
                    <section class="tm-content tm-contact">
                        <h2 class="mb-4 tm-content-title">Profile</h2>
                        <form id="contact-form" action="" method="POST">
                            <div class="form-group mb-4">
                                <input type="text" name="name" class="form-control" placeholder="Enter Your name "  />
                            </div>
                            <div class="form-group mb-4">
                                <input type="email" name="email" class="form-control" placeholder="Enter gmail"  />
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" name="enroll_no" class="form-control" placeholder="Enter Enrollment Number"  />
                            </div>
                            <div class="form-group mb-4">
                                <input type="type" name="sem" class="form-control" placeholder="Enter Semester" />
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" name="dept" class="form-control" placeholder="Enter Department"  />
                            </div>
                            <div class="form-group mb-4">
                                <input type="tel" name="contact" class="form-control" placeholder="Enter contact no" pattern="[0-9]{10}" title="Write correct Phone number of 10 digit" />
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-big btn-primary">Update</button>
                                &nbsp;
                                <button type="button" class="btn btn-big btn-primary" onclick="document.location.href='changepassword.php'">Change Password</button>
                            </div>
                        </form>
                    </section>
                </main>
            </div>
<?php require_once 'footer.php'; ?>
