<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    #customers td, #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }
    
    #customers tr:nth-child(even){background-color: #f2f2f2;}
    
    #customers tr:hover {background-color: #ddd;}
    
    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #04AA6D;
      color: white;
    }
    </style>
<form action="{{route('crud.submit', [$showdata->id])}}" method="POST" >
    @csrf 
    <table id="customers">
        <tr>
            <td>
                Enter Record:
            </td>
            <td>
                <input type="text" name="name" class="form-control" value="{{$showdata->name}}" required>
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit" class="btn btn-success">Update</button>
            </td> 
            <td>
                <a href="{{route('crud.showw')}}" class="btn btn-primary">Back</a>
            </td> 
        </tr>
    </table>
</form>
