export interface Category {
    id: number;
    name: string;
    sorting: number;
    updatedAt: Date;
    createdAt: Date;
}
export interface Element {
    id: number;
    name: string;
    source: string;
    component: string;
    updatedAt: Date;
    createdAt: Date;
}
