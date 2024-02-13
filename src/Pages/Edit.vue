<script setup>
import IconIonAperture from '~icons/ion/aperture-outline';
</script>

<template>
	<div class="test" v-if="0">
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
	</div>

	<Form class="test">
    <Row>
      <TextField label="Single" :icon="IconIonAperture"/>
      <Field label="Multi">
        <TextField label="Left"/>
        <TextField label="Right"/>
      </Field>
      <Field label="Custom">
        <button>Button</button>
      </Field>
    </Row>
      <Field label="Combi">
				<span>Prefix</span>
				<i><IconBiBell/></i>
        <TextField label="Input" :icon="IconIonAperture" />
        <Button label="Addon" :icon="IconIonAperture" />
      </Field>
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
  </Form>

</template>

<style lang="scss">
@use "bootstrap/dist/css/bootstrap.css";

.test {
	.form-box, .row-box, col-box, field-box, label-box {
		border: dashed 1px #888;
	}

	.row-box {
		background: #fee;
	}

	.col-box {
		background: #efe;
	}

	.field-box {
		background: #eef;
	}

	.label-box {
		background: #ffc;
	}
}
</style>
