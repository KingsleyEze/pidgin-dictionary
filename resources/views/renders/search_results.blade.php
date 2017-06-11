<!DOCTYPE html>
<html>
<head>
    <title>Pidgin Dictionary</title>
    <link rel="stylesheet" href="{{ asset("/assets/vendors/bootstrap/bootstrap.css") }}"/>
</head>
<body>
<div class="container">
    <div class="row">
        <div style="padding-top: 100px;"></div>
        <div class="col-md-6 col-md-offset-3">
            <h1>Pidgin Dictionary <small>beta.0.0.1</small></h1>
            <form action="/search" method="get">
                <div class="form-group">
                    <div class="input-group">
                        <input name="phrase" class="form-control"/>
                            <span class="input-group-btn">
                                <button class="btn btn-success">Search</button>
                            </span>
                    </div>
                </div>
            </form>

            <div class="well-lg">
                @if(!empty($phraseResult))




                    <h3 style="text-decoration: underline">{{ $phraseResult->word }}:</h3>
                    <p><strong>Meaning:</strong> {{ $phraseResult->definition }}</p>
                @else
                            <p>{{ "No Result Found!" }}</p>



                @endif
            </div>
        </div>
    </div>
</div>

<script src="{{ asset("/assets/js/jquery.min.js") }}"></script>
<script src="{{ asset("/assets/vendors/bootstrap/bootstrap.min.js") }}"></script>
</body>
</html>