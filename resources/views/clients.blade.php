<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passport Clients</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    @vite('resources/js/app.js')

</head>
<body>

    <script type='module'>

        axios.get('/oauth/clients')
        .then((result)=>{
            console.log(result.data);

            let client_data = result.data[0].name;

            //document.getElementById('clients_list').innerHTML = client_data;
        });
        
    </script>

    <div>

        <center>
            <h1 id = "clients_list" style="padding: 1%;">Clients</h1>
        </center>

        @isset($clients)

            <table class="table table-striped table-responsive-xl">

                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">User ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Redirect Url</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Updated At</th>
                        <th scope="col">Delete Client</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($clients as $client)
                        
                        <tr>
                            <th scope="row">{{$client->id}}</th>
                            <td>{{$client->user_id}}</td>
                            <td>{{$client->name}}</td>
                            <td>{{$client->redirect}}</td>
                            <td>{{$client->created_at}}</td>
                            <td>{{$client->updated_at}}</td>
                            <td>
                                <a href="#" onclick="return confirm('Are you sure you want to \'Delete\' this client?')">
                                    <svg style = "color: red;" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10s10-4.47 10-10S17.53 2 12 2zm4.3 14.3a.996.996 0 0 1-1.41 0L12 13.41L9.11 16.3a.996.996 0 1 1-1.41-1.41L10.59 12L7.7 9.11A.996.996 0 1 1 9.11 7.7L12 10.59l2.89-2.89a.996.996 0 1 1 1.41 1.41L13.41 12l2.89 2.89c.38.38.38 1.02 0 1.41z"/></svg>
                                </a>
                            </td>
                        </tr>

                    @endforeach
 
                </tbody>

            </table>

        @endisset

    </div>

    <div>

        <center>
            <h1 id = "clients_list">Add Client</h1>
        </center>

        <form action="/oauth/clients" method="POST" style="padding: 1% 2.7%;">

            @csrf

            @error('email')
                <p style="color: red;">{{$message}}</p>
            @enderror

            <div class="form-row">

                <div class="col-md-4 mb-3">
                    <label for="validationTooltip01">Client Name</label>
                    <input type="text" name="client_name" class="form-control" id="validationTooltip01" placeholder="John's Iphone" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationTooltip02">Redirect URL</label>
                    <input type="text" name="redirect" class="form-control" id="validationTooltip02" placeholder="http://third-party-app.com/callback" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>

            </div>
            
            <button class="btn btn-primary" type="submit">Create New Client</button>

        </form>
        
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>