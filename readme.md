Nette Web Project
=================

This is a simple, skeleton application using the [Nette](https://nette.org), [Vue.js](https://vuejs.org/) and [Inertia.js](https://inertiajs.com/). This is meant to
be used as a starting point for your new projects.

[Nette](https://nette.org) is a popular tool for PHP web development.
It is designed to be the most usable and friendliest as possible. It focuses
on security and performance and is definitely one of the safest PHP frameworks.

If you like Nette, **[please make a donation now](https://nette.org/donate)**. Thank you!


Requirements
------------

- Web Project for Nette 3.1 requires PHP 8.0


Installation
------------

The best way to install Web Project is using Composer. If you don't have Composer yet,
download it following [the instructions](https://doc.nette.org/composer). Then use command:

```cmd
composer create-project nette/web-project path/to/install
cd path/to/install
```

Make directories `temp/` and `log/` writable.


Dev Server
----------------

The simplest way to get started is to start the built-in PHP server in the root directory of your project:

```cmd
composer dev
yarn dev
```


Then visit `http://localhost:8000` in your browser to see the welcome page.

Technologies
----------------

### Pinia 

* https://pinia.vuejs.org/
* `yarn add pinia`
```js
// @/stores/app.js
import {defineStore} from "pinia";
import {ref, computed} from "vue";

export const useAppStore = defineStore('app', () => {
  const	name = ref('Spongebob') // state
  const greeting = computed(() => `Hello ${name.value}!`) // getter
  function setName(value) { name.value = value } // action

  return { name, greeting, setName }
})
```
```vue 
<!-- @/Pages/Home.vue -->
<script setup>
import {useAppStore} from '@/stores/app'
import {storeToRefs} from "pinia";

const $appStore = useAppStore()
const {name, greeting} = storeToRefs($appStore)
name.value = 'Patrick'
// using vue macro:
// let {name} = $(storeToRefs($appStore))
// name = 'Patrick'
</script>

<template>
<div>{{ greeting }}</div>
<input v-model="name" />
<button @click="$appStore.setName('Thadeus')">Set</button>
</template>
```

