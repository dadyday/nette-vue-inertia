<script setup>
import {BListGroup, BListGroupItem} from "bootstrap-vue-next";
</script>

<template>

	<!-- BListGroup>
		<Wrap :each="BListGroupItem">
			<span>item A</span>
			<BListGroupItem>item B</BListGroupItem>
			item C
			<span>item D</span>
			<BListGroupItem>item E</BListGroupItem>
		</Wrap>
	</BListGroup -- >

	<BListGroup>
		<Wrap :group="BListGroupItem">
			<span>item A</span>
			<BListGroupItem>item B</BListGroupItem>
			item C
			<span>item D</span>
			<BListGroupItem>item E</BListGroupItem>
		</Wrap>
	</BListGroup -->


  <table>
		<Wrap group="tr">
			<Wrap each="td">
				<span>1.1</span>
				1.2
				<td>1.3</td>
				<td>1.4</td>
				<tr>
					<td>2.1</td>
				</tr>
				<td>
					3.1
				</td>
				<span>3.2</span>
				3.3
			</Wrap>
		</Wrap>
  </table>

  <!--Wrap all="ul">
    <ul>
    <Wrap some="li">
      <span>item A</span>
      <li><span>item B</span></li>
      item C
      <span>item D</span>
      <li>item E</li>
    </Wrap>
    </ul>
  </Wrap-->

</template>

<style scoped>
table, tr, td, span {
  border: dashed 1px blue;
  background: #eef;
}
tr {
	background: #efe;
}
td {
	background: #fee;
	padding: 5px;
}
span {
	color: red;
	font-weight: bold;
}
</style>