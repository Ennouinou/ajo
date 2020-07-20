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
                <h3>Necessitatibus</h3>
                <p>Eum, quasi, est, vitae, ipsam nobis consectetur ea aspernatur ad eos voluptatibus fugiat nisi perferendis impedit. Quam, nulla, excepturi, voluptate minus illo tenetur sint ab in culpa cumque impedit quibusdam. Saepe, molestias quia voluptatem natus velit fugiat omnis rem eos sapiente quasi quaerat aspernatur quisquam deleniti accusantium laboriosam odio id?</p>

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
            <!-- /Sidebar -->

        </div>
    </div>	<!-- /container -->

@endsection
