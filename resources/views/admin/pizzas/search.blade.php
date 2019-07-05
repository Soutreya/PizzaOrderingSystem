<a href="/"><button>HOME</button></a>
<br>
<h1>Search engine</h1>
<form action="/search_results" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q">
        <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                Search
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
</form>