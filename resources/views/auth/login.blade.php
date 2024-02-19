<x-layout>

    <section class="container-fluid">
        <div class="row row-login justify-content-center align-md-items-center h-md-75 mb-5">
            <div class="col-12 col-md-4 col-xl-4 me-md-3 d-flex flex-column align-items-center text-center text-md-start align-items-md-start">
                <img class="img-fluid logo-login" src="https://logos-world.net/wp-content/uploads/2020/05/Facebook-Logo-2019.png" alt="">
                <p class="fs-4 w-75">Facebook ti aiuta a connetterti e rimanere in contatto con le persone della tua vita.</p>
            </div>
            <div class="col-12 col-login col-md-3 d-flex flex-column justify-content-start rounded">

                <section class="container-fluid">
                    <div class="row align-items-start">
                        <form class="col-12 d-flex flex-column justify-content-start" method="POST" action="/login">
                            @csrf
                            <div class="mb-0">
                                <label for="email" class="form-label"></label>
                                <input name="email" placeholder="Email" type="email" class="form-control" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label"></label>
                                <input name="password" placeholder="Password" type="password" class="form-control" id="password">
                            </div>
                            <button type="submit" class="btn btn-primary">Accedi</button>
                            <a class="text-center text-decoration-none border-bottom p-3 mt-3" href="">Password dimenticata?</a>
                            <div class="d-flex justify-content-center p-2">
                                <a class="btn btn-login-custom text-white py-3 fw-semibold w-75 my-2" href="{{route('register')}}">Crea Nuovo Account</a>
                            </div>
                        </form>
                    </div>
                </section>

            </div>
        </div>

        {{-- <div class="container fixed-bottom mt-5">
            <footer class="py-3 my-4">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item"><a href="/" class="nav-link px-2 text-body-secondary">Home</a></li>
                </ul>
                <p class="text-center text-body-secondary">© 2023 Facebook Clone, Inc</p>
            </footer>
        </div> --}}
    </section>

</x-layout>