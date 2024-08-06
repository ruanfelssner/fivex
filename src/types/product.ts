
export type Item = {
    title: string,
    qtd: number,
    checked: boolean
}

export type Product = {
    id: number;
    name: string;
    images?: { src: string }[] || null;
    slug: string;
    regular_price: string;
}
