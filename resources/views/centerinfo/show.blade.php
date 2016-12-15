
<h1>
	{{ Auth::guard('center_info')->user()->inst_name}}
</h1>

<table border="2px">
<tr>
	<th>
	ID
	</th>
	<th>
	 Eiin No
	</th>
	<th>
	Inst Name
	</th>
	<th>
	Password
	</th>
</tr>


@foreach ($centerinfos as $centerinfo)
	<tr>
		<td>
		{{$centerinfo->id}}
		</td>
		<td>
		{{$centerinfo->eiin_no}}
		</td>
		<td>
		{{$centerinfo->inst_name}}
		</td>
		<td>
		{{$centerinfo->inst_pass}}
		</td>
	</tr>
</tr>
@endforeach

</table>