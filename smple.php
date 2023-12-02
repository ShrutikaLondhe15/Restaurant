<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ADMIN</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">
    
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Agbalumo&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <style>
        *{
            padding: 0px;
            margin: 0px;
        }
       
        #a{
            font-family: 'Courier New', Courier, monospace;
        }
    
    .black-overlay::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 1.1); /* Adjust the last value (0.5) for the transparency level */
    }
    
   
    
/*     
    .booking{
        background-image: url("./IMG/restro.jpg");
        background-size: cover;
    } */
    
    .formtest{
        background-color: rgba(0, 0, 0, 0.6);
    }
    
    .fadedform{
        background-color: rgba(266, 266, 266, 0.2);
    }
    
    .top1{
        position: fixed;
        right: 20px;
        bottom: 20px;
        z-index: 1000;
     
    }
    
    a{
        text-decoration: none;
        color: #fff;
    }

    </style>
    
    </head>
<body>
    <form>
    <div class="px-0 wow fadeInUp booking" data-wow-delay="0.1s" id="contact" >
        <div class="formtest">
        <h2 class="text-white text-center fs-1 pt-4" style="font-family: Agbalumo; text-decoration: underline;" >Admin Login</h2>
        <div class="row g-0 py-5">
      <center>
            <div class="col-md-5 fadedform d-flex align-items-center rounded-5">
                <div class="p-5 wow fadeInUp " data-wow-delay="0.2s">
                    <h1 class="text-white mb-4" style="font-family: Agbalumo;"> Restaurant Menu Details</h1>
                    
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Dish Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="price" placeholder="price">
                                    <label for="price">Price</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating date" id="date3" data-target-input="nearest">
                                    <input type="file" class="form-control datetimepicker-input" id="photo" placeholder="choose file"/>
                                    <label for="datetime">Image</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select" id="select1">
                                      <option value="1">Breakfast</option>
                                      <option value="2">Lunch</option>
                                      <option value="3">Dinner</option>
                                    </select>
                                    <label for="select1">Category</label>
                                  </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                    <label for="message">Description</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-warning w-100 py-3" type="submit">Add to Menu</button>
                            </div>
                        </div>
               
                </div>
            </div>
        </div>
        </div>

    </center>
</div>
</div>

</body>
</html>
