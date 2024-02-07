<script setup>
import {BListGroupItem} from "bootstrap-vue-next";
</script>

<template>
  <Wrap all="ul">
    <Wrap each="li">
      <span>item A</span>
      <li><span>item B</span></li>
      item C
      <span>item D</span>
    </Wrap>
    <li>item E</li>
  </Wrap>

  <BListGroup>
    <Wrap :each="BListGroupItem">
      <span>item A</span>
      <BListGroupItem>item B</BListGroupItem>
      item C
      <span>item D</span>
    </Wrap>
  </BListGroup>

  <div class="input-group mb-3">
    <span class="input-group-text">$</span>
    <div>
      <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
    </div>
    <span class="input-group-text">0.00</span>
    <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
  </div>

  <Form>
    <Row>
      <TextField label="Single" />
      <Col label="Multi">
        <TextField label="Left"/>
        <TextField label="Right"/>
      </Col>
      <Field label="Custom">bin da</Field>
    </Row>
    <Row>
      <Col label="Combi">
        <span class="input-group-text">Prefix</span>
        <TextField label="Input" />
        <Button label="Addon" />
      </Col>
    </Row>
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

<style scoped>

</style>