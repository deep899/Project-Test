
<template>
    <q-select
      v-model="selectedItems"
      multiple
      label="Select items"
      :options="items"
      emit-value
      map-options
      @input="$emit('input', selectedItems)"
    >
      <template v-slot:option="{ option, selected, toggleOption }">
        <q-item :class="selected ? 'selected' : ''" @click="toggleOption(option)">
          <q-item-section>
            <q-checkbox  :true-value="option.value" :false-value="null" />
          </q-item-section>
          <q-item-section>{{ option.label }}</q-item-section>
        </q-item>
      </template>
    </q-select>
  
    <q-input
      v-model="textInput"
      label="Text input"
      :disabled="!allowTextInput"
      @input="$emit('text-input', textInput)"
    />
  </template>
  
  <script>
  export default {
    name: '',
    props: {
      value: {
        type: Array,
        required: true
      },
      items: {
        type: Array,
        required: true
      },
      allowTextInput: {
        type: Boolean,
        default: true
      }
    },
    data() {
      return {
        selectedItems: this.value,
        textInput: '',
        selected:''
      };
    },
    watch: {
      value(newValue) {
        this.selectedItems = newValue;
      }
    }
  };
  </script>
  