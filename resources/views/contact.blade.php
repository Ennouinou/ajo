@extends('layout')
@section('content')

    <!-- container -->
    <div class="container">

        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="active">About</li>
        </ol>

        <div class="row">

            <!-- Article main content -->
            <article class="col-sm-9 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Contact us</h1>
                </header>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid aperiam blanditiis cum cupiditate eos est fugit iusto maiores maxime minima nisi nobis qui quos repellendus sed sunt temporibus, veniam?
                </p>
                <br>
                <form>
                    <div class="row">
                        <div class="col-sm-4">
                            <input class="form-control" type="text" placeholder="Name">
                        </div>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" placeholder="Email">
                        </div>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" placeholder="Phone">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <textarea placeholder="Type your message here..." class="form-control" rows="9"></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <label class="checkbox"><input type="checkbox"> Sign up for newsletter</label>
                        </div>
                        <div class="col-sm-6 text-right">
                            <input class="btn btn-action" type="submit" value="Send message">
                        </div>
                    </div>
                </form>

            </article>
            <!-- /Article -->

            <!-- Sidebar -->
            <aside class="col-sm-3 sidebar sidebar-right">
                <div class="widget">
                    <h4>Address</h4>
                    <address>
                        ASWAK SALAM
                    </address>
                    <h4>Phone:</h4>
                    <address>
                        0624052011
                    </address>
                </div>
            </aside>
            <!-- /Sidebar -->

        </div>
    </div>	<!-- /container -->

    <section class="container-full top-space">
        <div id="map"></div>
    </section>

@endsection





