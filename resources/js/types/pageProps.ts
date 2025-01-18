import type { PageProps as BasePageProps } from '@inertiajs/core'

export interface PageProps extends BasePageProps {
  auth?: AuthData
  users: Array<UserData>
}

interface AuthData {
  user: AuthUserData
}

interface AuthUserData {
  username: string
}

interface UserData {
  id: string
  name: string
  email: string
}
