<div class="main">
        <div class="container">
            <div class="booking-content">
                <div class="booking-image">
                    <img class="booking-img" src="<?= img("form-img.jpg") ?>" alt="Booking Image">
                </div>
                <div class="booking-form">
                    <form id="booking-form" action="<?= base_url("account/register") ?>" method="post">
                        <h2>Daftar Akun Untuk Jelajah Depok</h2>
                        <div class="form-group form-input">
                            <input type="text" name="username" id="username"/>
                            <label for="name" class="form-label">Username</label>
                        </div>
                        <div class="form-group form-input">
                            <input type="email" name="email" id="email" />
                            <label for="phone" class="form-label">Email</label>
                        </div>
                        <div class="form-group form-input">
                            <input type="password" name="password" id="password" />
                            <label for="password" class="form-label">Password</label>
                        </div>
                        
                        <div class="form-submit">
                            <input type="submit" value="Daftar" class="submit" id="submit" name="daftar" />
                            <a href="<?= base_url("account/login") ?>" class="vertify-booking">Masuk jika sudah punya akun</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>