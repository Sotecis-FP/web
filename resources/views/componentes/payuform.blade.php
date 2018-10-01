<form  method="post" action="https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu/">
  <input name="merchantId"    type="hidden"  value="508029"   >
  <input name="accountId"     type="hidden"  value="512321" >
  <input name="description"   type="hidden"  value="{{$datosPayu['description']}}"  >
  <input name="referenceCode" type="hidden"  value="{{$datosPayu['referenceCode']}}" >
  <input name="amount"        type="hidden"  value="{{$datosPayu['amount']}}"   >
  <input name="tax"           type="hidden"  value="0"  >
  <input name="taxReturnBase" type="hidden"  value="0" >
  <input name="currency"      type="hidden"  value="COP" >
  <input name="signature"     type="hidden"  value="{{$datosPayu['signature']}}"  >
  <input name="test"          type="hidden"  value="1" >
  <input name="buyerEmail"    type="hidden"  value="{{$client['correo']}}" >
  <input name="buyerFullName"    type="hidden"  value="{{$client['nombre']}}" >
  <input name="shippingAddress"    type="hidden"  value="CARRERA33#42-12" >
  <input name="shippingCity"    type="hidden"  value="BOGOTA" >
  <input name="shippingCountry"    type="hidden"  value="3166-2" >
  <input name="responseUrl"    type="hidden"  value="" >
  <input name="confirmationUrl"    type="hidden"  value="" >
  <input name="Submit"  class="btn-continuar"   onclick="crearOrden()" type="submit"  value="PAGAR" >
</form>
