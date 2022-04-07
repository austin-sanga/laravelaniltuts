<h1>Members List</h1>

<table border="1">
    <tr>
        <td>DEPTNUM</td>
        <td>DESCRIP</td>
        <td>INSTNAME</td>
        <td>DEPTNAME</td>
        <td>STATE</td>
        <td>POSTCODE</td>
        <td>operation</td>
    </tr>
    {{-- this is a for each loop ya kuvuta vitu kutoka database --}}
    @foreach ($users as $user)
    <tr>
        {{-- hizo manenpo ni ya kurefer kwenye controller --}}
        <td>{{ $user['DEPTNUM'] }}</td>
        <td>{{ $user['DESCRIP'] }}</td>
        <td>{{ $user['INSTNAME'] }}</td>
        <td>{{ $user['DEPTNAME'] }}</td>
        <td>{{ $user['STATE'] }}</td>
        <td>{{ $user['POSTCODE'] }}</td>

        {{-- Here is how a delete link is placed and what is to delete reference is the DEPTNUM --}}
        <td><a href={{ "delete/".$user['DEPTNUM'] }}>Delete</a></td>

        {{-- Here is the link for editing a content --}}
        <td><a href={{ "edit/".$user['DEPTNUM'] }}>Edit</a></td>
    </tr>  
    @endforeach
</table>

{{-- Hii span ndo inadisplay the next and previous kwenye pagination --}}
<span>
    {{ $users->links() }}
</span>

{{-- this is the style for removing big indexex ambazo zinatokea kwenye screen --}}
<style>
    .w-5{
         display: none;
    }
    </style>