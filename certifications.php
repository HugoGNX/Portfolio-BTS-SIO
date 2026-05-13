<link href=
"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
		rel="stylesheet">
	<style>
		.flip-card {
			perspective: 1000px;
		}

		.flip-card-inner {
			position: relative;
			width: 100%;
			height: 100%;
			text-align: center;
			transition: transform 0.6s;
			transform-style: preserve-3d;
		}

		.flip-card:hover .flip-card-inner {
			transform: rotateY(180deg);
		}

		.flip-card-front,
		.flip-card-back {
			position: absolute;
			width: 100%;
			height: 100%;
			backface-visibility: hidden;
		}

		.flip-card-front {
			background-color: #f8f9fa;
			color: #000;
		}

		.flip-card-back {
			background-color: #343a40;
			color: #000;
			transform: rotateY(180deg);
		}

		.card-img-top {
			max-height: 200px;
			object-fit: cover;
		}
	</style>



<main class="container py-5 mt-5">
    <div class="text-center mb-5">
            <h1 class="display-4 fw-light text-uppercase tracking-widest">Mes Certifications</h1>
            <div class="border-top border-primary border-4 w-25 mx-auto"></div>
    </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <div class="card">
                                    <img src=
    "https://media.geeksforgeeks.org/wp-content/cdn-uploads/20230305182658/HTML-tutorial.jpg"
                                        class="card-img-top" alt="Front Image">
                                    <div class="card-body">
                                        <h5 class="card-title">1ère certife</h5>
                                        <p class="card-text">description</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <div class="card">
                                    <img src=
    "https://media.geeksforgeeks.org/wp-content/cdn-uploads/20230310153232/ReactJS-Tutorial.jpg"
                                        class="card-img-top" alt="Back Image">
                                    <div class="card-body">
                                        <h5 class="card-title">En savoir plus</h5>
                                        <button type="button" class="btn btn-primary btn-lg">Allez voir</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

