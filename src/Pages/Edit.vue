<script setup>
import {BListGroupItem} from "bootstrap-vue-next";
</script>

<template>
  <Form>
		<Row>
			<Col>
				<Field label="Single">
					<TextField />
				</Field>
			</Col>
			<Col>
				<Field>
					<Button label="Button"/>
				</Field>
			</Col>
		</Row>
	</Form>

	<Form>
			<Col>
				<Field label="Single">
					<TextField />
				</Field>
			</Col>
			<Col>
				<Field>
					<Button label="Button"/>
				</Field>
			</Col>
	</Form>

	<Form>
		<Row>
				<Field label="Single">
					<TextField />
				</Field>
				<Field>
					<Button label="Button"/>
				</Field>
		</Row>
	</Form>

	<Form>
		<Row>
			<Col>
					<TextField label="Single"/>
			</Col>
			<Col>
					<Button label="Button"/>
			</Col>
		</Row>
	</Form>

	<Form>
					<TextField label="Single"/>
					<Button label="Button"/>
		<Row></Row>
					<TextField label="Single"/>
					<Button label="Button"/>
		<Row />
				<Field label="Combi">
					<TextField />
					<Button label="Button"/>
				</Field>
	</Form>

  <!--Form>
	<Form>
		<TextField label="Input" />
  </Form>

			<Col>
				<Field label="Single">
					<TextField />
				</Field>
			</Col>
		<Row>
			<Col>
				<Field label="Single">
					<TextField />
				</Field>
			</Col>
			<Col>
				<Field label="Combi">
					<TextField />
					<Button label="Button" />
				</Field>
			</Col>
		</Row>


    <Row>
      <TextField label="Single" />
      <Col label="Multi">
        <TextField label="Left"/>
        <TextField label="Right"/>
      </Col>
      <Field label="Custom">
        <button>Button</button>
      </Field>
    </Row>
      <Col label="Combi">
        <span class="input-group-text">Prefix</span>
        <TextField label="Input" />
        <Button label="Addon" />
      </Col>
    <Row>
      <Spacer/>
      <Button label="Right" />
    </Row>
    <Row>
      <Spacer/>
      <Button label="Center" />
      <Button label="Center" />
      <Spacer/>
    </Row>
  </Form-->
</template>

<style scoped>

</style>