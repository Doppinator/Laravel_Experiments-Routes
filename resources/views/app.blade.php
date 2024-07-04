<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BandCampDrop</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

     

    </head>


    <body>
        <div class="bg-dark text-secondary px-4 py-5 text-center" style="height: 100vh">
            <div class="py-5">
                <h1 class="display-5 fw-bold text-white">BandCampDrop</h1>
                <div class="col-lg-6 mx-auto">
                   
        
                        <p class="fs-5 mb-4">Select Something</p>
        
                        <form method="post">
                            @method('PUT')
                            <div class="row g-3">
                                <div class="col">
                                    <select name="randomSelection" class="form-select" aria-label="Default select example" >
                                        <option selected>Select Something to POST</option>
                                        <option value="1">This</option>
                                        <option value="1">That</option>
                                        <option value="1">Other</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <input name="inputText" type="text" class="form-control" placeholder="Input field text to POST" aria-label="inputText" value="<?php echo "You Entered " , @$outputText;?>">
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-outline-info" type="submit">Test</button>
                            
                                </div>
               
                
                            </div>
                        </form>
        
          
        
                </div>
            </div>
        </div>
        </body>
        </html>
        