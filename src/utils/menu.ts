function createMenuHierarchy(categories: any[]) {
  const categoryMap = new Map<number, any>();
  
  // Primeiro, mapeia todos os elementos pelo ID para acesso direto posteriormente
  categories.forEach(category => {
    const menuEntry = {
      name: category.name,
      link: '/categorias/' + category.slug,
      subMenu: false,
      subMenuList: []
    };
    categoryMap.set(category.id, menuEntry);
  });

  // Agora, atribui cada categoria ao seu parent
  const result = [] as any[];
  categories.forEach(category => {
    if (category.parent === 0) {
      result.push(categoryMap.get(category.id)); // É uma categoria raiz
    } else {
      const parent = categoryMap.get(category.parent);
      if (parent) {
        const childEntry = categoryMap.get(category.id);
        // Ajusta o link da subcategoria para incluir o slug do parent
        childEntry.link = parent.link + '/' + category.slug;

        // Indica que o parent possui subMenu e adiciona a subcategoria ajustada
        parent.subMenu = false;
        parent.subMenuList.push(childEntry); // Adiciona a categoria ao subMenuList de seu parent
      }
    }
  });

  return result;
}
export { createMenuHierarchy };