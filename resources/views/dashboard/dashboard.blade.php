<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite(['resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>
    <!-- === wrapper section === -->
    <section id="wrapper" class="d-flex w-100">
        <!-- aside nav-->
        <aside class="border-right shadow-sm" id="aside-nav">
            <!-- aside logo brand -->
            <a href="#" class="aside-brand text-decoration-none border-bottom mb-3">
                <i class="bi bi-stack fs-4" style="vertical-align: middle;"></i>
                <span class="ms-2">Dashboard</span>
            </a>
            <!-- /aside logo brand -->

            <!-- aside nav ul list -->
            <ul class="nav flex-column" id="aside-nav-ul">
                <li class="nav-item">
                    <a class="nav-link active" href="#">
                        <i class="bi bi-bar-chart-line fs-5" style="vertical-align: middle;"></i>
                        <span class="ms-2">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-book fs-5" style="vertical-align: middle;"></i>
                        <span class="ms-2">Buku</span>
                    </a>
                </li>
            </ul>
            <!-- /aside nav ul list -->
        </aside>
        <!-- /aside nav-->

        <!-- === main === -->
        <main class="w-100 bg-light d-flex flex-column dash" id="main">
            <!-- === header === -->
            <header id="header-navbar" class="sticky-top w-100">
                <nav class="navbar navbar-expand navbar-light bg-white shadow-sm w-100">
                    <div class="container-fluid">

                        <div class="border rounded-circle shadow-sm p-2" id="aside-toggle-btn">
                            <!-- svg -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                                class="bi bi-list" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                            </svg>
                            <!-- /svg -->
                        </div>

                        <div>
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item dropdown user-dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <!--svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                            <path
                                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                        </svg>
                                        <!--/svg-->
                                        <span>Fanny Maulana</span>
                                    </a>
                                    <ul class="dropdown-menu shadow-sm" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item" href="#">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <!-- === /header === -->

            <!-- === main body section start === -->

            <section class="container-fluid">
                <br>
                <h2 class="mb-4">Halaman Admin Bookslide</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem, assumenda eligendi itaque
                    adipisci, earum fugiat fugit distinctio impedit delectus quibusdam vero dignissimos debitis
                    officiis, repudiandae rerum eius tempora tenetur! Repellat velit suscipit impedit. Facilis, aperiam
                    suscipit. Vel nulla aliquid similique eius odit quod repellendus temporibus sequi, sunt mollitia
                    cupiditate ea totam blanditiis facere perferendis esse vero! Perferendis vitae assumenda in quod, ea
                    ab facere dolore repellat veritatis placeat suscipit nesciunt aliquam fuga officia, minima earum. Et
                    atque consequatur obcaecati! Corporis, voluptates commodi ex natus voluptatum sed soluta qui harum,
                    nam est ratione architecto repudiandae rem! Tempora consequuntur rem corrupti pariatur ex ea
                    voluptas fugit, exercitationem perspiciatis quaerat nihil, officia quos qui autem ipsam. Ipsum
                    deleniti mollitia tenetur! Animi tempore mollitia fugiat tempora eius dignissimos labore totam
                    repellendus? Dolores sint nobis voluptatem qui beatae quas nisi ullam eum iste, incidunt at
                    voluptatum asperiores repellendus veniam numquam corrupti culpa. Beatae, temporibus eum deserunt
                    aperiam harum fugit aliquam! Voluptate, atque? Reprehenderit voluptatum hic aliquid eius possimus
                    porro molestias nam voluptatem doloremque sequi asperiores delectus, iusto eligendi facere iste
                    culpa debitis nostrum? Eos modi doloribus commodi neque perferendis, incidunt eius placeat totam
                    vero iure expedita, exercitationem ex. Accusantium eum doloremque, nesciunt earum qui quia mollitia?
                    Voluptatem vero quam tempore perspiciatis dolorem? Magni fuga excepturi ab quisquam facilis
                    doloribus quod quas quasi quidem cumque nisi nostrum, voluptates ad dolorem sapiente sequi beatae
                    similique? Iure voluptatum enim sed officia totam eius perspiciatis possimus modi recusandae natus
                    odio quasi maiores dolorum quos quis magnam assumenda nemo provident laborum consequatur repellendus
                    ullam, voluptas esse. Inventore possimus voluptas suscipit fuga, modi corporis omnis ut saepe
                    architecto, ipsum repudiandae ea vero! Iusto expedita earum assumenda numquam sint, eum eius
                    eligendi consectetur fugiat excepturi voluptas ad dignissimos explicabo consequuntur tenetur
                    sapiente quas temporibus dolores eaque et ipsa nobis fugit doloremque laudantium?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia nisi non, debitis quis recusandae a
                    officia autem ipsam necessitatibus amet suscipit animi ipsa unde numquam. Assumenda corrupti ut
                    consectetur atque, reiciendis impedit unde nisi veniam voluptas laudantium! Laudantium enim a
                    doloribus perferendis deserunt aperiam officiis laboriosam, labore iusto! Animi dolor sapiente
                    exercitationem mollitia eligendi rem repellat harum, molestiae nulla excepturi fugiat qui
                    repellendus corrupti aspernatur aliquid, aliquam facere. Sit debitis incidunt veritatis laborum ut
                    quibusdam consectetur rem expedita quaerat corporis. Aliquam repellat quo numquam quis, autem sint?
                    Odit excepturi, magnam voluptatum, provident ducimus doloremque inventore ratione magni vel
                    laboriosam neque.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi quos iure voluptates veritatis
                    soluta beatae vel dolores modi quo facere. Rem officiis error soluta quam sapiente velit sint itaque
                    quos mollitia consequatur iusto, temporibus inventore quidem eveniet suscipit maiores autem libero
                    incidunt earum tempore voluptas repellendus veniam molestias placeat? At magnam iste quas id eos
                    tempora dolores natus facere in asperiores vero perferendis doloribus ullam reiciendis nostrum
                    error, eum nisi, nam earum culpa! Voluptates beatae, officia eius obcaecati fuga inventore maxime
                    facere error, cupiditate autem ipsa consequatur illum. Consectetur ipsum dolorum atque nam ipsam. Id
                    veritatis quisquam eveniet corporis. Autem?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus accusantium earum, error perferendis
                    tempora natus qui sequi accusamus modi, culpa minima est, necessitatibus totam. Aut quidem
                    consequatur laborum ipsam saepe corporis tenetur nobis doloribus nihil ex enim sunt, numquam,
                    voluptate animi non atque error iusto obcaecati accusantium quo rem? Dolor quia non libero quisquam
                    amet voluptate ratione autem eos quos labore, adipisci beatae nobis, error aliquam molestias
                    deserunt. Consequuntur nobis aliquam harum minus ipsa aliquid dicta eos temporibus necessitatibus ut
                    illo doloremque voluptate quis, vel porro quibusdam incidunt maiores cupiditate commodi mollitia non
                    voluptatum eveniet sequi eligendi. Necessitatibus, atque id!</p>
            </section>

            <!-- === /main body section end === -->

            <!-- === footer === -->
            <footer id="footer" class="bg-dark py-3 text-white text-center shadow-sm mt-auto">
                <div>Copyright © Bookslide 2022. All Rights Reserved.</div>
            </footer>
            <!-- === /footer === -->

        </main>
        <!-- === /main === -->


    </section>
    <!-- === /wrapper section === -->

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>