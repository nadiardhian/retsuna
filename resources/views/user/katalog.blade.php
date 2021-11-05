@include ('layouts.navbar')
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
<div class="row">
    <div class="col-sm-2">
        <div class="mb-3" style="width: 18rem;">
            <div class="card-header">
                Kategori Produk
            </div>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">First item</a>
                <a href="#" class="list-group-item list-group-item-action">Second item</a>
                <a href="#" class="list-group-item list-group-item-action">Third item</a>
            </div> 
        </div>
    </div>
        <div class="col-sm-9">
            <h1 style="text-align:left;"> Katalog Produk</h1>
            <div class="row">
                <div class="column">
                    <div class="card" >
                            <a href="#"> 
                                <img src="https://image.indonetwork.co.id/f-webp/banner_company_images/thumbs/1400x600/2021/01/19/c0a6e085cab61b6bf0c1606e8c2bd9d7.jpg" class="img-fluid" alt="PT Zahra Inti Retsuna">
                            </a>
                                <h3>Card 1</h3>
                                <p>Some text</p>
                                <p>Some text</p>
                    </div>
                   
                </div>

                <div class="column">
                    <div class="card">
                        <a href="#"> 
                            <img src="https://image.indonetwork.co.id/f-webp/banner_company_images/thumbs/1400x600/2021/01/19/c0a6e085cab61b6bf0c1606e8c2bd9d7.jpg" class="img-fluid" alt="PT Zahra Inti Retsuna">
                        </a>
                        <h3>Card 2</h3>
                        <p>Some text</p>
                        <p>Some text</p>
                    </div>
                </div>
  
                <div class="column">
                    <div class="card">
                    <a href="#"> 
                        <img src="https://image.indonetwork.co.id/f-webp/banner_company_images/thumbs/1400x600/2021/01/19/c0a6e085cab61b6bf0c1606e8c2bd9d7.jpg" class="img-fluid" alt="PT Zahra Inti Retsuna">
                    </a>
                        <h3>Card 3</h3>
                        <p>Some text</p>
                        <p>Some text</p>
                    </div>
                </div>
  
                <div class="column">
                    <div class="card">
                        <a href="#"> 
                            <img src="https://image.indonetwork.co.id/f-webp/banner_company_images/thumbs/1400x600/2021/01/19/c0a6e085cab61b6bf0c1606e8c2bd9d7.jpg" class="img-fluid" alt="PT Zahra Inti Retsuna">
                        </a>
                        <h3>Card 4</h3>
                        <p>Some text</p>
                        <p>Some text</p>
                    </div>
                </div>
            </div>
        </div>
</div>


<style>
    * {
    box-sizing: border-box;
    }

    body {
    font-family: Arial, Helvetica, sans-serif;
    }

    /* Float four columns side by side */
    .column {
    float: left;
    width: 25%;
    padding: 0 10px;
    }

    /* Remove extra left and right margins, due to padding */
    .row {margin: 0 -5px;}

    /* Clear floats after the columns */
    .row:after {
    content: "";
    display: table;
    clear: both;
    }

    /* Responsive columns */
    @media screen and (max-width: 600px) {
    .column {
        width: 100%;
        display: block;
        margin-bottom: 20px;
    }
    }

    /* Style the counter cards */
    .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    padding: 16px;
    text-align: center;
    background-color: #f1f1f1;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
