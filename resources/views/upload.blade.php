<!-- file upload not working -->
<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>upload</title>
    </head>
    <body>
        <form action="upload" method="post" enctype="multipart/form-data">
            <input type="file" name="img" />
            @csrf
            <button>upload img</button>
        </form>
    </body>
</html> -->
<!-- select from table -->
<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>suraj</title>
    </head>
    <body>
        <table border="1">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>enrollmentno</th>
            </tr>
            notes me dekho::database
        </table>
    </body>
</html> -->
<!-- insert from form  -->
<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>suraj</title>
    </head>
    <body>
        <form action="insert" method="post">
            @csrf
            <input type="text" name="name" placeholder="naam" /><br />
            <input type="text" name="enroll" placeholder="address" />
            <button type="submit">submit</button>
        </form>
    </body>
</html> -->

<!-- update data -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>update</title>
    </head>
    <body>
        <form action="update1" method="post">
            @csrf
            <input type="radio" name="action" value="insert" />
            <label for="insert">insert</label>
            <input type="radio" name="action" value="update" />
            <label for="update">update</label>
            <input type="radio" name="action" value="delete" />
            <label for="update">delete</label>

            <select name="id">
                @foreach($data as $i)
                <option value="{{$i->id}}">{{$i->id}}</option>
                @endforeach
            </select>
            <br />
            <input type="text" name="name" /><br />
            <input type="text" name="enroll" /><br />
            <button type="submit">Update</button>
        </form>
    </body>
</html>
