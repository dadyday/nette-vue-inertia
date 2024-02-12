<script>
import {h} from "vue";

/** collect all childs of a slot */
function getChilds(slot) {
	const items = [];
	for (let fragment of slot) {
		for (let child of fragment.children) {
			items.push(child)
		}
	}
	return items;
}

/** wrap all non-type items with new comp of type */
function groupChilds(type, items) {
	const result = []
	let childs = []

	for (let item of items) {
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
	return h(type, { ...props }, () => items)
	//return h(type, null, { default: () => [items]})
}

export default {
	props: [ 'group', 'each'],
	setup(props, {slots}) {
		return () => {
			const slot = slots.default()
			const items = getChilds(slot)
			if (props.each) return eachChilds(props.each, items)
			if (props.group) return groupChilds(props.group, items)
			return null
		}
	}
}
</script>
