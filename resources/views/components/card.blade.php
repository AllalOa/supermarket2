
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

<body class="bg-light">

<div class="container mt-5">
    <div class="row g-4 justify-content-center">
        <!-- Card 1 -->
        <div class="col-md-4 col-sm-6">
            <div class="card border-0 shadow" style="perspective: 1000px;">
                <div class="d-flex flex-column" style="transition: transform 0.6s; transform-style: preserve-3d; height: 400px;"
                     onmouseover="this.style.transform='rotateY(180deg)'" 
                     onmouseout="this.style.transform='rotateY(0deg)'">
                    <!-- Front Side -->
                    <div class="card-front position-absolute w-100 h-100 bg-success text-white d-flex flex-column justify-content-center align-items-center" 
                         style="backface-visibility: hidden; border-radius: 10px;">
                        <img src="https://via.placeholder.com/120" alt="User Image" class="rounded-circle border border-white mb-3" style="width: 120px; height: 120px;">
                        <h3 class="mb-1">Ahmed B.</h3>
                        <p class="mb-0">Caissier Superette</p>
                    </div>
                    <!-- Back Side -->
                    <div class="card-back position-absolute w-100 h-100 bg-white text-dark d-flex flex-column justify-content-center align-items-center p-3" 
                         style="transform: rotateY(180deg); backface-visibility: hidden; border-radius: 10px;">
                        <h3 class="text-success mb-3">Informations</h3>
                        <ul class="list-unstyled text-start">
                            <li><strong>ID:</strong> 001234</li>
                            <li><strong>Email:</strong> ahmed.b@superette.com</li>
                            <li><strong>Poste:</strong> Caissier principal</li>
                            <li><strong>Expérience:</strong> 3 ans</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Duplicate for more cards -->
        <!-- Card 2 -->
        <div class="col-md-4 col-sm-6">
            <div class="card border-0 shadow" style="perspective: 1000px;">
                <div class="d-flex flex-column" style="transition: transform 0.6s; transform-style: preserve-3d; height: 400px;"
                     onmouseover="this.style.transform='rotateY(180deg)'" 
                     onmouseout="this.style.transform='rotateY(0deg)'">
                    <!-- Front Side -->
                    <div class="card-front position-absolute w-100 h-100 bg-success text-white d-flex flex-column justify-content-center align-items-center" 
                         style="backface-visibility: hidden; border-radius: 10px;">
                        <img src="https://via.placeholder.com/120" alt="User Image" class="rounded-circle border border-white mb-3" style="width: 120px; height: 120px;">
                        <h3 class="mb-1">John D.</h3>
                        <p class="mb-0">Cashier Superette</p>
                    </div>
                    <!-- Back Side -->
                    <div class="card-back position-absolute w-100 h-100 bg-white text-dark d-flex flex-column justify-content-center align-items-center p-3" 
                         style="transform: rotateY(180deg); backface-visibility: hidden; border-radius: 10px;">
                        <h3 class="text-success mb-3">Informations</h3>
                        <ul class="list-unstyled text-start">
                            <li><strong>ID:</strong> 001235</li>
                            <li><strong>Email:</strong> john.d@superette.com</li>
                            <li><strong>Poste:</strong> Junior Cashier</li>
                            <li><strong>Expérience:</strong> 1 year</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add more cards as needed -->
    </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

