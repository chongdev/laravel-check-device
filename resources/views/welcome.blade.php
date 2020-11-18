<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>

        body{
            background: #18191a;
            color: #fff
        }
        table{
            width: 100%
        }
        table td{
            border: 1px solid #000;
            padding: 5px
        }

        .label{
            width: 10px;
            white-space: nowrap
        }

    </style>
</head>
<body>


    <table>
        <tbody>

            <tr>
                <td class="label">device : </td>
                <td>{{ $agent->device() }}</td>
            </tr>
            <tr>
                <td class="label">browser : </td>
                <td>{{ $agent->browser() }}</td>
            </tr>

            <tr><td colspan="2" style="background: #fff;color:#000">Basic detection.</td></tr>
            <tr>
                <td class="label">isMobile: </td>
                <td>{{ $agent->isMobile() }}</td>
            </tr>

            <tr>
                <td class="label">isTablet: </td>
                <td>{{ $agent->isTablet() }}</td>
            </tr>

            <tr>
                <td class="label">iPhone: </td>
                <td>{{ $agent->is('iPhone') }}</td>
            </tr>
            <tr>
                <td class="label">isDesktop: </td>
                <td>{{ $agent->isDesktop() }}</td>
            </tr>



            <tr>
                <td class="label">robot : </td>
                <td>{{ $agent->robot() }}</td>
            </tr>
            <tr>
                <td class="label">iPad: </td>
                <td>{{ $agent->is('iPad') }}</td>
            </tr>

            {{-- <tr>
                <td class="label">Opera Mini: </td>
                <td>{{ $agent->is('Opera Mini') }}</td>
            </tr>

            <tr>
                <td class="label">Firefox: </td>
                <td>{{ $agent->is('Firefox') }}</td>
            </tr> --}}



            <tr><td colspan="2" style="background: #fff;color:#000">OS</td></tr>
            <tr>
                <td class="label">Windows: </td>
                <td>{{ $agent->is('Windows') }}</td>
            </tr>
            <tr>
                <td class="label">OS X: </td>
                <td>{{ $agent->is('OS X') }}</td>
            </tr>

            <tr>
                <td class="label">Android: </td>
                <td>{{ $agent->is('Android') }}</td>
            </tr>




        </tbody>
    </table>
</body>
</html>
