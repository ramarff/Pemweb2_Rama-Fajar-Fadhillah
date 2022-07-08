
    <div class="main">

        <div class="container">
            <div class="booking-content">
                <div class="booking-image">
                    <img class="booking-img" src="<?= img("form-img.jpg") ?>" alt="Booking Image">
                </div>
                <div class="booking-form">
                    <form action="<?= base_url("account/login"); ?>" method="post">
                        <h2>Login</h2>
                        <div class="form-group form-input">
                            <input type="text" name="username" id="name" value="" />
                            <label for="name" class="form-label">Username</label>
                        </div>
                        <div class="form-group form-input">
                            <input type="password" name="password" id="password" value=""  />
                            <label for="password" class="form-label">Password</label>
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Daftar" class="submit" id="submit" name="masuk" />
                            <a href="<?= base_url("account/register") ?>" class="vertify-booking">Daftar Jika Belum Punya Akun</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>