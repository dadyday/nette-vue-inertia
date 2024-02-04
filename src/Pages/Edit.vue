<script setup>
import {BListGroupItem} from "bootstrap-vue-next";
</script>

<template>
  <ul>
    <Wrap wrapper="li">
      <span>item A</span>
      <li><span>item B</span></li>
      item C
      <span>item D</span>
    </Wrap>
  </ul>

  <BListGroup>
    <Wrap :wrapper="BListGroupItem">
      <span>item A</span>
      <BListGroupItem>item B</BListGroupItem>
      item C
      <span>item D</span>
    </Wrap>
  </BListGroup>

  <Form>
    <Row>
      <TextField label="Fistname" />
      <Col>
        <TextField label="Surname" />
        <Button label="Find" />
      </Col>
    </Row>
    <Row>
      <Spacer/>
      <Button label="Save" />
    </Row>
  </Form>
</template>

<style scoped>

</style>