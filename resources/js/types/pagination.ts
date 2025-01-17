export interface LinkData {
  url: string
  label: string
  active: boolean
}

export interface PaginatedData<DataType> {
  links: Array<LinkData>
  data: Array<DataType>
}
