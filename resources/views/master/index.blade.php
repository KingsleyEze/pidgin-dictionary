<!DOCTYPE html>
<html>
<head>
    <title>Pidgin Dictionary Master</title>
    <link rel="stylesheet" href="{{ asset("/assets/vendors/bootstrap/bootstrap.css") }}"/>
</head>
<body>
<div class="container">
    <div class="row">
        <div style="padding-top: 30px;"></div>
        <div class="col-md-6 col-md-offset-3">
            <h1>#Master <small>Beta.0.0.1</small></h1>


            @include('fragments.alert')

            {{--// Input--}}
            <form action="/master" method="post">
                    <div class="form-group">
                        <label for="word">Pidgin Word:</label>
                        <input name="word" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="definition">Meaning:</label>
                        <textarea name="definition" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success pull-right">ADD WORD</button>
                    </div>

            </form>
            <div class="row" style="padding-left: 20px;">
                There are ({{$pidginWordCollections != null ? $pidginWordCollections->count() : 0}}) pidgin word(s) in your collection.
            </div>

            {{--<div class="well-lg">--}}
                {{--<h3 style="text-decoration: underline">Wetin:</h3>--}}
                {{--<p><strong>Meaning:</strong> what is it?</p>--}}
            {{--</div>--}}
        </div>
    </div>
</div>

<script src="{{ asset("/assets/js/jquery.min.js") }}"></script>
<script src="{{ asset("/assets/vendors/bootstrap/bootstrap.min.js") }}"></script>
</body>
</html>