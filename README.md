# TOUR DELFIN ROSADO - API Specification 

## Version 1.0
Date 9/30/2022 SmartBrand - Initial Draft

## URL

https://amasun.satelital.org/

## Methods

### Login
Authenticate the user with the system and obtain the auth_token

<li>Request</li>
<table border=1>
    <tr>
        <th>
            Method
        </th>
        <th>
            EndPoint
        </th>
    </tr>
    <tr>
        <td> 
            POST
        </td>
        <td> 
            api/login/
        </td>
    </tr>
</table>
<table border=1>
    <tr>
        <th>
            Type
        </th>
        <th>
            Params
        </th>
        <th>
            Values
        </th>
    </tr>
    <tr>
        <td> 
            BODI/JSON
        </td>
        <td> 
            "email"
        </td>
        <td> 
            "miguel76@example.com"
        </td>
    </tr>
    <tr>
        <td> 
            <p></p>
        </td>
        <td> 
            "password"
        </td>
        <td> 
            "password"
        </td>
</table>

<li>Response</li>
<table border=1>
    <tr>
        <th>
            Status
        </th>
        <th>
            Response
        </th>
    </tr>
    <tr>
        <td> 
            200
        </td>
        <td> 
            {<br> "token": "1|mwIpmBWyBSvzLkco5v0bmJGHLhgMYXBXYK3conAC"
            <br>
	"message": "Login Successfully" <br>}
    <br>
    <br>
    token (string) - all further API calls must have this key in header Authorization = token
        </td>
    </tr>
</table>
<br>

### Get Data Boats

<li>Request</li>
<table border=1>
    <tr>
        <th>
            Method
        </th>
        <th>
            EndPoint
        </th>
        <th></th>
    </tr>
    <tr>
        <td> 
            GET
        </td>
        <td> 
            api/v1/boats<br>
            api/v1/boats/[id]
        </td>
        <td>
        <table border=1>
    <tr>
        <th>
            Type
        </th>
        <th>
            Params
        </th>
        <th>
            Values
        </th>
    </tr>
    <tr>
        <td> 
            HEADERS
        </td>
        <td> 
            Authorization
        </td>
        <td> 
            [token]
        </td>
    </tr>
    <tr>
        <td> 
            <p></p>
        </td>
        <td> 
            Accept
        </td>
        <td> 
            application/json
        </td>
    </tr>
    <tr>
        <td> 
            <p></p>
        </td>
        <td> 
            Content-Type
        </td>
        <td> 
            application/json
        </td>
    </tr>
</table>
        </td>
    </tr>
    <tr>
        <td> 
            POST
        </td>
        <td> 
            api/v1/boats
        </td>
        <td>
        <table border=1>
    <tr>
        <th>
            Type
        </th>
        <th>
            Params
        </th>
        <th>
            Values
        </th>
    </tr>
    <tr>
        <td> 
            HEADERS
        </td>
        <td> 
            Authorization
        </td>
        <td> 
            [token]
        </td>
    </tr>
    <tr>
        <td> 
            <p></p>
        </td>
        <td> 
            Accept
        </td>
        <td> 
            application/json
        </td>
    </tr>
</table>
        </td>
    </tr>
</table>


<li>Response</li>
<table border=1>
    <tr>
        <th>
            Status
        </th>
        <th>
            Response
        </th>
    </tr>
    <tr>
        <td> 
            200
        </td>
        <td> 
            JSON
        </td>
    </tr>
</table>
<br>

### Get Data Bookings

<li>Request</li>
<table border=1>
    <tr>
        <th>
            Method
        </th>
        <th>
            EndPoint
        </th>
    </tr>
    <tr>
        <td> 
            GET
        </td>
        <td> 
            api/v1/bookings<br>
            api/v1/bookings/[id]
        </td>
    </tr>
</table>
<table border=1>
    <tr>
        <th>
            Type
        </th>
        <th>
            Params
        </th>
        <th>
            Values
        </th>
    </tr>
    <tr>
        <td> 
            HEADERS
        </td>
        <td> 
            Authorization
        </td>
        <td> 
            [token]
        </td>
    </tr>
    <tr>
        <td> 
            <p></p>
        </td>
        <td> 
            Accept
        </td>
        <td> 
            application/json
        </td>
    </tr>
</table>

<li>Response</li>
<table border=1>
    <tr>
        <th>
            Status
        </th>
        <th>
            Response
        </th>
    </tr>
    <tr>
        <td> 
            200
        </td>
        <td> 
            JSON
        </td>
    </tr>
</table>
<br>

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
