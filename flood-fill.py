class Solution:
    def doColor(self, image: list[list[int]], sr:int, sc: int, oldColor: int, newColor:int) -> list[list[int]]:
        #print(f"SR: {sr}; SC: {sc}; curColor: {image[sr][sc]}")
        if image[sr][sc] == oldColor:
            print(f"CurColor: {sr} : {sc} > {image[sr][sc]}")

            image[sr][sc] = newColor
            if sr - 1 >= 0:
                print(f"1. {(sr-1)} : {sc} : changing")
                image = self.doColor(image, (sr-1), sc, oldColor, newColor )
            if (sr + 1) in image:
                print(f"2. {(sr+1)} : {sc} : changing")
                image = self.doColor(image, (sr+1), sc, oldColor, newColor )
            if sc - 1 >= 0:
                print(f"3. {sr} : {(sc-1)} : changing")
                image = self.doColor(image, sr, (sc-1), oldColor, newColor )
            if (sc + 1) in image[0]:
                print(f"4. {sr} : {(sc+1)} : changing")
                image = self.doColor(image, sr, (sc+1), oldColor, newColor )
        return image

    def floodFill(self, image: list[list[int]], sr: int, sc: int, newColor: int) -> list[list[int]]:
        oldColor = image[sr][sc]
        #image[sr][sc] = newColor

        return self.doColor(image, sr, sc, oldColor, newColor )

image = [[1,1,1],[1,1,0],[1,0,1]]
sr = 1
sc = 1
newColor = 2

sol = Solution()
image = sol.floodFill(image, sr, sc, newColor)
print(image)