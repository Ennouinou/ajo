@extends('layout')
@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="active">About</li>
        </ol>
        <div class="row">
            <!-- Article main content -->
            <article class="col-sm-8 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Membres</h1>
                </header>
                <h3>Président</h3>
                <p><img src="assets/images/douich.jpg" alt="" class="img-rounded pull-right" width="300" > Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente.</p>
                <p>Quos, aliquam nam velit impedit minus tenetur beatae voluptas facere sint pariatur! Voluptatibus, quisquam, error, est assumenda corporis inventore illo nesciunt iure aut dolor possimus repellat minima veniam alias eius!</p>

            </article>
            <!-- /Article -->

            <!-- Sidebar -->
            <aside class="col-sm-4 sidebar sidebar-right">
                <div class="widget">
                    <h4>Activités</h4>
                    <ul class="list-unstyled list-spaces">
                        <li><a href="">Formations </a><br><span class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, laborum.</span></li>
                        <li><a href="">Activités Sociales</a><br><span class="small text-muted">Suscipit veniam debitis sed ipsam quia magnam eveniet perferendis nisi.</span></li>
                        <li><a href="">Activités Cultureles</a><br><span class="small text-muted">Reprehenderit illum quod unde quo vero ab inventore alias veritatis.</span></li>
                        <li><a href="">Activité Artistiques </a><br><span class="small text-muted">Sed, mollitia earum debitis est itaque esse reiciendis amet cupiditate.</span></li>
                    </ul>
                </div>

            </aside>
            <div class="team-section text-center my-5 w-97 m-auto" id="team">
                <h2 class="h1-responsive font-weight-bold my-5">Membres du bureau</h2>
                <p class="grey-text w-responsive mx-auto mb-5">BLA BLA BLA </p>
                <div class="row" >
                    <div class="col-lg-3 col-md-6 mb-lg-0 mb-5">
                        <div class="avatar mx-auto">
                            <img src="/assets/images/douich.jpg" class="rounded-circle z-depth-1 w-50"
                                 alt="Photo of ">
                        </div>
                        <h5 class="font-weight-bold mt-4 mb-3">test</h5>
                        <p class="text-uppercase blue-text"><strong>test test</strong></p>
                        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, animi aspernatur consequatur nisi quidem repellat temporibus. Cupiditate eaque id quo. Ab eligendi id laboriosam nam non provident quaerat sint vero?</p>
                        <ul class="list-unstyled mb-2">
                            <a class="p-2 fa-lg tw-ic" href="">
                                <i class="fa fa-facebook blue-text"></i>
                            </a>
                            <a class="p-2 fa-lg ins-ic" href="">
                                <i class="fa fa-linkedin blue-text"></i>
                            </a>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-lg-0 mb-5">
                        <div class="avatar mx-auto">
                            <img src="/assets/images/douich.jpg" class="rounded-circle z-depth-1 w-50"
                                 alt="Photo of ">
                        </div>
                        <h5 class="font-weight-bold mt-4 mb-3">test</h5>
                        <p class="text-uppercase blue-text"><strong>test test</strong></p>
                        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, animi aspernatur consequatur nisi quidem repellat temporibus. Cupiditate eaque id quo. Ab eligendi id laboriosam nam non provident quaerat sint vero?</p>
                        <ul class="list-unstyled mb-2">
                            <a class="p-2 fa-lg tw-ic" href="">
                                <i class="fa fa-linkedin blue-text"></i>
                            </a>
                            <a class="p-2 fa-lg ins-ic" href="">
                                <i class="fa fa-github blue-text"></i>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
