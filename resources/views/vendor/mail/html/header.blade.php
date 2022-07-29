<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://sun9-7.userapi.com/impf/az_zBMxIMueszcPOLL2xHyFHHOidtDzhvvSh7Q/3pT7rQgoAhY.jpg?size=811x1080&quality=96&sign=117f02c2717adcff3f9137481bc262e4&type=album" class="logo" alt="Laravel Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
