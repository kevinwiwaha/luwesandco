<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Awal Page wrapper -->
<div class="page-wrapper">
    <!-- awal size -->
    <div class="container" style="margin-top: 100px;">
        <h1 class="text-judul mt-5" style="text-align: center;">Size Guide</h1>
        <table class="table table-hover mt-4">
            <thead>
                <tr>
                    <th scope="col">Size</th>
                    <th scope="col">Size Equivalent</th>
                    <th scope="col">Chest</th>
                    <th scope="col">Waist</th>
                    <th scope="col">Hip</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">XS</th>
                    <td>00 - 0</td>
                    <td>32"</td>
                    <td>24" - 25"</td>
                    <td> 33" - 34"</td>
                </tr>
                <tr>
                    <th scope="row">S</th>
                    <td> 2 - 4</td>
                    <td> 34" - 35"</td>
                    <td> 26" - 27"</td>
                    <td> 35" - 37"</td>
                </tr>
                <tr>
                <tr>
                    <th scope="row">M</th>
                    <td> 6 - 8</td>
                    <td> 36" - 37"</td>
                    <td> 28" - 29"</td>
                    <td> 38" - 40"</td>
                </tr>
                </tr>
                <tr>
                <tr>
                    <th scope="row">L</th>
                    <td> 10 - 12</td>
                    <td> 38" - 39"</td>
                    <td> 30 " - 31"</td>
                    <td> 42" - 44"</td>
                </tr>
                </tr>
                <th scope="row">XL</th>
                <td> 14 - 16</td>
                <td> 40 " - 41"</td>
                <td> 32" - 33"</td>
                <td> 45" - 48"</td>
                </tr>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- akhir size -->
    <!-- awal FAQ -->
    <div class="container">
        <h1 class="text-judul mt-5" style="text-align: center;">FAQ</h1>
        <div class="tulis">
            <h5>How do I know what size to order?</h5>
            <p>We have a size chart here. Each product page also has a size guide section where we give notes and guidance on each particular style's fit - whether or not it has stretch, what sizes our models are wearing, and if we recommend sizing up or down. Obviously, all brands run differently, so we suggest busting out that tape measure to get the most accurate read.</p>
            <br>
            <h5>Can I place a gift order?</h5>
            <p>Unfortunately this is not an option at this time. We are working to make this happen!</p>
            <br>
            <h5>Can I make changes to my order?</h5>
            <p>Unfortunately, once you've placed your order it is not possible to amend any details, as our warehouse team will have already started processing your order.</p>
            <br>
            <h5>Will you be getting more stock of an item I am interested in?</h5>
            <p>Some items are so demanding that we may restock some units. Therefore, we suggest signing up to our "email when available" list. You may do so by clicking on the "email me when available" link on the bottom right of the page and selecting the size as well as entering your email. In the event that this item becomes available in the size selected, you will be notified via email.</p>
            <br>
            <h5>Do you offer student discounts?</h5>
            <p>Unfortunately we do not offer a student discount at this time.</p>
        </div>
    </div>
    <!-- akhir FAQ -->
</div>
<!-- Akhir Page wrapper -->

<?= $this->endSection(); ?>