<script>
import {h} from "vue";

const v = false // verbose

/** collect all childs of a slot */
function getChilds(slot) {
	let items = [];
	console.log(slot)
	for (let part of slot.values()) {
		if (Array.isArray(part.children)) {
			items.push(...part.children.values())
		}
		else if (typeof part.children.default === 'function') {
			const is = part.children.default()
			const is2 = is.map((i) => h(i))
			items.push(...is2)
		}
		else {
			items.push(h(part))
		}
	}
	/*
	for (let fragment of slot.default()) {
		if (Array.isArray(fragment.children)) {
			items.push(...fragment.children)
		}
		else if (typeof fragment.children.default === 'function') {
			items.push(...fragment.children.default())
		}
		else {
			items.push(fragment)
		}
	}
	*/
	if (v) console.log('items', items)
	return items;
}

/** wrap all non-type items with new comp of type */
function groupChilds(type, items) {
	const result = []
	let childs = []

	for (let item of items) {
		if (v) console.log('test', type, 'vs.', item.type)
		if (type !== item.type) {
			childs.push(item)
		} else {
			if (childs.length) result.push(addChilds(type, childs))
			result.push(item)
			childs = []
		}
	}
	if (childs.length) result.push(addChilds(type, childs))
	return result
}

/** wrap any item with type */
function eachChilds(type, items) {
	const result = []
	for (let item of items) {
		if (v) console.log('test', type, 'vs.', item.type)
		if (type === item.type) {
			result.push(item)
		} else {
			const props = getUnusedProps(item)
			result.push(addChilds(type, [item], props))
		}
	}
	return result
}

/** get any prop of item, that is not declared */
function getUnusedProps(item) {
	const result = {}
	for (let name in item?.props ?? []) {
		if (item.type?.props?.includes(name) ?? false) continue
		result[name] = item.props[name]
	}
	return result
}

/** render new comp with items and props */
function addChilds(type, items, props) {
	if (v) console.log('add', type, props, items)
	return h(type, { ...props}, { default: () => items })
	//return h(type, { ...props }, () => items)
}

export default {
	name: 'Wrap',
	props: [ 'group', 'each'],
	setup(props, {slots}) {
		return () => {
			const items = getChilds(slots.default())
			if (props.each) return eachChilds(props.each, items)
			if (props.group) return groupChilds(props.group, items)
			return null
		}
	}
}
</script>
